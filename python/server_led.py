import RPi.GPIO as GPIO # Import Raspberry Pi GPIO library
import urllib.request
import requests
from time import sleep # Import the sleep function from the time module

led=26
sensor = 16
data = ' '

GPIO.setwarnings(False) # Ignore warning for now
GPIO.setmode(GPIO.BCM) # Use physical pin numbering
GPIO.setup(26, GPIO.OUT) # Set pin 8 to be an output pin and set initial value to low (off)
GPIO.setup(16, GPIO.OUT)

while True: # Run forever
 webUrl=urllib.request.urlopen('http://192.168.1.20/iot/api/eron.php')
 print(data)
 data = webUrl.read()
 data = data.decode()
 b=data.split(",")
 sleep(2)
 a=int(data[0])
 #print(a)
 if a==1:
  GPIO.output(led, GPIO.HIGH) # Turn on
  print('led on')    
 elif a==0:
  GPIO.output(led, GPIO.LOW) # Turn off
  print('led off')    
 elif a==2:
  while True:
   webUrl1=urllib.request.urlopen('http://192.168.1.20/iot/api/eron.php')
   data1 = webUrl1.read()
   data1 = data1.decode()
   b=int(data1[0])
   print(b)
   if (b==0 or b==1):
    break
   ir = GPIO.input(sensor)
   if ir==1:
    GPIO.output(led, GPIO.HIGH)
    payload = {'cmd' : '3'}
    r=requests.post('http://192.168.1.20/iot/api/update_request.php',params=payload)
    print(r.url)
   elif (ir==0):
    GPIO.output(led, GPIO.LOW)
    payload = {'cmd' : '4'}
    r=requests.post('http://192.168.1.20/iot/api/update_request.php',params=payload)
    print(r.url)