import RPi.GPIO as GPIO   # Import Raspberry Pi GPIO library
from time import sleep    # Import the sleep function from the time module

led = 26   #giving userdefined name for GPIO pin

GPIO.setwarnings(False) #Ignore warning for now
GPIO.setmode(GPIO.BCM)  #Using GPIO pin numbering
GPIO.setup(led,GPIO.OUT)  #  Set pin 26 to be an output pin and set initial value to low (off)

while(True): # Run Forever
  GPIO.output(led,GPIO.HIGH) # Turn ON
  sleep(1) #sleep for 1 second
  GPIO.output(led,GPIO.LOW) #Turn OFF
  sleep(1) #Sleep for 1 second	