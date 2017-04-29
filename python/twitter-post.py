#!/usr/bin/python

#install pip / install https://pypi.python.org/pypi/setuptools setupuptools / install twitter
# https://docs.python.org/2/howto/logging.html
#-----------------------------------------------------------------------
# twitter-post-status
#  - posts a status message to your timeline
#-----------------------------------------------------------------------

from twitter import *
import logging
import datetime
import time


def log_de_mensajes(mensaje, status):
	logging.basicConfig(filename='twitter.log', level=logging.INFO, format='%(asctime)s %(message)s', datefmt='%d/%m/%Y %I:%M:%S %p')
	logging.info("Updated Status: %s" % status)
 

def postear(tweet):
	ts = time.time()
	st = datetime.datetime.fromtimestamp(ts).strftime('%d/%m/%Y %I:%M:%S %p ')
	# Cargar las credenciales del API
	config = {}
	execfile("config.py", config)
	# Creamos un objeto tipo twitter API
	twitter = Twitter(
		auth = OAuth(config["access_key"], config["access_secret"], config["consumer_key"], config["consumer_secret"]))
	# posteamos el mensaje a la cuenta asociada
	# twitter API docs: https://dev.twitter.com/rest/reference/post/statuses/update
	results = twitter.statuses.update(status = st+tweet)
	log_de_mensajes(tweet, tweet)
	#print "updated status: %s" % tweet


if __name__ == '__main__':
    tweet = "Prueba de Twitter Bot para el curso de Bases de datos II, @kmoragas , sorry toy probando =)"
    postear(tweet)
