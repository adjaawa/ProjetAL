#at first you must do:
# sudo apt-get install python3-pip
# pip3 install zeep


from zeep import Client
from zeep.transports import Transport
from requests import Session
from requests.auth import HTTPBasicAuth

# type of requetes
# <username>username</username>
#<password>password</password>

#the wsdl's url
wsdl = "url wsdl"

#the wsdl is password protected and autherntication details
session = Session()
session.auth = HTTPBasicAuth(<username>, <password>)

#The transport object handles all communication to the SOAP server
client=Client(wsdl,transport=Transport(session=session))

#Creating a dictionary named 'request_data' 
request_data={'username' : username ,
              'password' : password}

#'request_data' is the request parameter dictionary.
#the operation named 'serviceName' is defined in the passed wsdl.
try:
	response=client.service.serviceName(**request_data)
	#Zeep response is similar to a python dictionary object so we use the same syntax:
	print(response['key'])
	#or print(response)

	#the other services
	#service 1
	try:
		response=client.service.service1(**request_data)
	except Fault as err:
    	print( f'Zeep error: serviceName: { err }' )
    	sys.exit( 1 )
    #service 2
    try:
		response=client.service.service2(**request_data)
	except Fault as err:
    	print( f'Zeep error: serviceName: { err }' )
    	sys.exit( 1 )
    #service 3
    try:
		response=client.service.service3(**request_data)
	except Fault as err:
    	print( f'Zeep error: serviceName: { err }' )
    	sys.exit( 1 )

except Fault as err:
    print( f'Zeep error: serviceName: { err }' )
    sys.exit( 1 )