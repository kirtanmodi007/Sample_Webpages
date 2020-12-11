#import RPi.GPIO as GPIO

#!/usr/bin/python
import sys
#import Adafruit_DHT
import time
import requests
import json
#import RPi.GPIO as GPIO
import re, sys
import urllib3

import datetime
import time
from threading import Thread

http = urllib3.PoolManager()

#GPIO.setwarnings(False)
#GPIO.setmode(GPIO.BOARD)
#GPIO.setup(11, GPIO.IN)         #Read output from PIR motion sensor
#GPIO.setup(3, GPIO.OUT)         #LED output pin

'''def first_slot():
    while True:
        slot = 1
        i = input("Start status p1: ")

        baseURL = 'localhost/parking/status.php?i=%s&slot=%s' %(i,slot)
        #fin=baseURL +"temp=%s&hum=%s" %(temperature, humidity)
        f = http.request('GET',baseURL)
        print (f.read())
        f.close()

        if i==1:
            arr_time1 = datetime.datetime.now()
            print "Car Arrived at P1 at:" , arr_time1
            #print arr_time
            while True:
                i = input("Current Status p1: ")
                if i==1:
                    continue
                if i==0:
                    dep_time1 = datetime.datetime.now()
                    print "Car Departured from P1 at:" , dep_time1
                    #print dep_time
                break           
        time.sleep(25)'''

'''def second_slot():
    while True:
        i = input("Start status p2: ")
        if i==1:
            arr_time2 = datetime.datetime.now()
            #print arr_time
            print "Car Arrived at P2 at:" , arr_time2
            while True:
                i = input("Current Status p2: ")
                if i==1:
                    continue
                if i==0:
                    dep_time2 = datetime.datetime.now()
                    time.sleep(1)
                    print "Car Departured from P2 at:" , dep_time2
                    time.sleep(1)
                    #print dep_time
                break '''


#t1 = Thread(target = first_slot)
#t2 = Thread(target = second_slot)

#t1.start()
#t2.start()

global i
i=0
j = 1
k = 1
if j==1:
    print "Sensor Detected"
    i = i+1

if k==1:
    print "Sensor Detected"
    i = i+1

print i
