#!/usr/bin/python

#install pip / install https://pypi.python.org/pypi/setuptools setupuptools / install twitter
# https://docs.python.org/2/howto/logging.html
# chmod 755 xampp-linux-*-installer.run
# sudo ./xampp-linux-*-installer.run
# sudo apt-get install php5-mysqlnd
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
import hashlib
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
		conectar_mongo(json_stock(lista))
		# posteo los mensajes individualmente
		#for mensaje in mensajes_a_enviar:
		#	if mensaje != []:
		#		postear(mensaje[0])
		print "Done ..."
		# Genero el ciclo de scheduling
		s.enter(5, 1, do_scheduling, (sc,))
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
	return {"stock" : lista}

## Funcion que conecta a mongo y guarda los json de mensaje y blockchain
def conectar_mongo(stock_t):
	# carga el last hash usado
	config_hash = {}
	execfile("lastHash.py", config_hash)
	lastHash = config_hash["lastHash"]
	# nos conectamos a mongo
	client = MongoClient()
	client = MongoClient('localhost', 27017)
	client = MongoClient('mongodb://localhost:27017/')
	# seteamos las base de datos y las colections
	db = client.basesii
	stock = db.stock
	blockchain = db.blockchain
	# insertamos  los stocks 
	post_id = stock.insert_one(stock_t).inserted_id
	# creamos variables que usaremos despues
	new_hash = ""
	hash_00 = ""
	entero = 1
	flag = True
	anterior = ""
	while flag:
		# buscamos el hash con iniciales 000**********
		new_hash = hashlib.sha256(str(stock.find_one({"_id": post_id})).encode() + str(entero).encode())
		valor_hex = str(new_hash.hexdigest())
		if (valor_hex[0] == '0' and valor_hex[1] == '0' and valor_hex[2] == '0'):
			hash_00 = valor_hex
			flag = False
		else:
			entero += 1
	# seteamos el anterior
	if (lastHash == ""):
		anterior = "0000000000000000000000000000000000000000000000000000000000000000"
	else:
		anterior = str((blockchain.find_one({"hash": lastHash})).get("hash"))
	#guardamos en mongo
	jsonBC = { "stock" : str(stock.find_one({"_id": post_id})), "anterior" : anterior ,"hash" : str(hash_00), "nounce" : str(entero), "fecha" : datetime.datetime.utcnow()}
	bc_id = blockchain.insert_one(jsonBC).inserted_id
	lastHash = str(hash_00)
	escribir_file(lastHash)

	

# guarda el anterior para ser usando en otra corrida
def escribir_file(text):
	f = open('lastHash.py','r+')
	f.seek(0)
	f.write("lastHash = \""+text+"\"")
	f.truncate()
	f.close()


if __name__ == '__main__':
	s.enter(5, 1, do_scheduling, (s,))
	s.run()
	


