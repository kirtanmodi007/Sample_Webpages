#import RPi.GPIO as GPIO
import time
#!/usr/bin/python
import sys
#import Adafruit_DHT
import time
import requests
import json
#import RPi.GPIO as GPIO
import re, sys
import urllib3
import urllib2
import urllib

http = urllib3.PoolManager()


#GPIO.setwarnings(False)
#GPIO.setmode(GPIO.BOARD)
#GPIO.setup(11, GPIO.IN)         #Read output from PIR motion sensor
#GPIO.setup(3, GPIO.OUT)         #LED output pin
while True:
    i = 0
    
    #i=GPIO.input(11)   
    if i==0:
        print "No intruders",i
        #GPIO.output(3, 0)  #Turn OFF LED
        #time.sleep(0.1)


        #baseURL = 'localhost/parking/status.php?'
        #fin=baseURL +"status=%s" %(i)
        #f = http.request('GET',fin)
        #print (f.read())
        #print fin
        #time.sleep(10);
        #f.close()

        #mydata=[('one','1'),('two','2')]    #The first is the var name the second is the value
        #mydata=urllib.urlencode(mydata)
        #path='http://localhost/parking/status.php'    #the url you want to POST to
        #req=urllib2.Request(path, mydata)
        #req.add_header("Content-type", "application/x-www-form-urlencoded")
        #page=urllib2.urlopen(req).read()
        #time.sleep(30);

        req = urllib2.Request(url='http://localhost/parking/status.php?led=%s' % i )
        f = urllib2.urlopen(req)
        print f.read()
        
    elif i==1:                                      #When output from motion sensor is HIGH
        print "Intruder detected",i
        #GPIO.output(3, 1)  #Turn ON LED
        #time.sleep(0.1)
        baseURL = 'localhost/parking/status.php?'
        fin=baseURL +"status=%s" %(i)
        f = http.request('GET',fin)
        print (f.read())
        print fin
        time.sleep(10);
        f.close()
