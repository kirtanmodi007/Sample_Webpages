
#!/usr/bin/python
import sys
#import Adafruit_DHT
import time
import requests
import json
#import RPi.GPIO as GPIO
import re, sys
import urllib3

http = urllib3.PoolManager()

#GPIO.setmode(GPIO.BCM)
#sensor=Adafruit_DHT.DHT11

while True:
    #humidity, temperature = Adafruit_DHT.read_retry(11, 17)  
    #humidity = 50
    #temperature = 15
    #print('Temp={0:0.1f}*  Humidity={1:0.1f}%'.format(temperature, humidity))
    user_name = raw_input("Enter Your Name: ")                  
    #status = 1
    Email = 'vatsal2727@gmail.com'
    car_number = 123
    arival_time = 120
    departure_time = 100
    book_time = 1
                           


    baseURL = 'localhost/parking/user_info.php?'
    fin=baseURL +"u_name='%s'&u_email='%s'&car_num=%s&ariv_time=%s&dep_time=%s&book_time=%s" %(user_name, Email, car_number, arival_time, departure_time, book_time)
    f = http.request('GET',fin)
    print (f.read())
    print fin

    time.sleep(10);

    f.close()
