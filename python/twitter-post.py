#!/usr/bin/python

#install pip / install https://pypi.python.org/pypi/setuptools setupuptools / install twitter
# https://docs.python.org/2/howto/logging.html
#-----------------------------------------------------------------------
# twitter-post-status
#  - posts a status message to your timeline
#-----------------------------------------------------------------------

from twitter import *
import logging
import json
import datetime
import sched, time
import MySQLdb
from pymongo import MongoClient

s = sched.scheduler(time.time, time.sleep)


## Funcion que guarda un log de los mensajes posteados
def log_de_mensajes(mensaje, status):
	logging.basicConfig(filename='twitter.log', level=logging.INFO, format='%(asctime)s %(message)s', datefmt='%d/%m/%Y %I:%M:%S %p')
	logging.info("Updated Status: %s" % status)
 
## Funcion que se conecta a la API de twitter y nos permite postear un mensaje
def postear(tweet):
	ts = time.time()
	st = datetime.datetime.fromtimestamp(ts).strftime('%d/%m/%Y %I:%M:%S %p ')
	# Cargar las credenciales del API
	config = {}
	execfile("twitter_config.py", config)
	# Creamos un objeto tipo twitter API
	twitter = Twitter(
		auth = OAuth(config["access_key"], config["access_secret"], config["consumer_key"], config["consumer_secret"]))
	# posteamos el mensaje a la cuenta asociada
	# twitter API docs: https://dev.twitter.com/rest/reference/post/statuses/update
	results = twitter.statuses.update(status = st+tweet)
	log_de_mensajes(tweet, tweet)

## Funcion que me permite conectarme a la base
def conectar_mysql():
	# usamos los datos de la coneccion de un archivo de configuracion
	config_sql = {}
	execfile("mysql_config.py", config_sql)
	db = MySQLdb.connect(host = config_sql["host"], user = config_sql["user"], passwd = config_sql["password"], db = config_sql["db"])       
	#creamos un cursor encargado de ejecutar codigo sql
	cur = db.cursor()
	cur.execute("call stock_general")
	cur.execute("select * from stock")
	#parseamos los resultados en una lista
	lista = []
	for row in cur.fetchall():
		lista2 = []
		for cell in row:
			try:
				cell = int(cell)
			except:
				pass
			lista2.append(cell)
	   	lista.append(lista2)
	db.close()
	return lista


## funcion generadora del mensaje que se va a desplegar en twitter
def generar_tweets(lista):
	lista_resultante = []
	for row in lista:
		mensaje = "%s necesita los siguientes tipos de sangre: " %row[1]
		sangre = []
		for i in range (2,10):
			if i == 2 and row[i] < 5:
				sangre.append("AB+")
			elif i == 3 and row[i] < 5:
				sangre.append("AB-")
			elif i == 4 and row[i] < 5:
				sangre.append("A+")
			elif i == 5 and row[i] < 5:
				sangre.append("A-")
			elif i == 6 and row[i] < 5:
				sangre.append("B+")
			elif i == 7 and row[i] < 5:
				sangre.append("B-")
			elif i == 8 and row[i] < 5:
				sangre.append("O+")
			elif i == 9 and row[i] < 5:
				sangre.append("O-")
		if sangre != []:
			mensaje += (", ".join(sangre))
			lista_resultante.append([mensaje])
	return lista_resultante

## funcion que agenda cada cuanto tiempo se va a hacer el hilo de ejecucion del programa
def do_scheduling(sc):
	try:
		# me conecto a mysql
		lista = conectar_mysql()
		# genero los tweets
		mensajes_a_enviar = generar_tweets(lista)
		# guardo lo que voy a hacer en mongo
		conectar_mongo(json_mensaje(mensajes_a_enviar), json_stock(lista))
		# posteo los mensajes individualmente
		for mensaje in mensajes_a_enviar:
			if mensaje != []:
				postear(mensaje[0])
		print "Done ..."
		# Genero el ciclo de scheduling
		s.enter(15, 1, do_scheduling, (sc,))
	except Exception,e:
		print str(e)

## genero el json asociado al mensaje de twitter
def json_mensaje(mensaje):
	return {"salida" : "Twitter", "mensaje" : json.dumps(mensaje), "fecha" : datetime.datetime.utcnow()}

## genero el json asociado a un stock en un tiempo determinado
def json_stock(stock):
	lista = []
	for row in stock:
		lista.append({ "id_hospital" : row[0], "nombre" : row[1], "AB+" : row[2], "AB-" : row[3], "A+" : row[4], "A-" : row[5], "B+" : row[6], "B-" : row[7], "O+" : row[8], "O-" : row[9]})
	return { "fecha" : datetime.datetime.utcnow(), "stock" : lista}

## Funcion que conecta a mongo y guarda los json de mensaje y stock
def conectar_mongo(mensaje_t, stock_t):
	# me conecto a mongo
	client = MongoClient()
	client = MongoClient('localhost', 27017)
	client = MongoClient('mongodb://localhost:27017/')
	# creo o uso la base de datos basesii (> use basesii)
	db = client.basesii
	# creo o uso la coleccion de mensajes y stock. Esto gracias a que mongo crea esto de manera lazy
	mensajes = db.mensajes
	stock = db.stock
	# inserto en la base
	mensajes.insert_one(mensaje_t).inserted_id
	stock.insert_one(stock_t).inserted_id
	client.close()

if __name__ == '__main__':
	s.enter(15, 1, do_scheduling, (s,))
	s.run()
	


