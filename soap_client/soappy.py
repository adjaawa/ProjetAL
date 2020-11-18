from SOAPpy import WSDL
wsdlFile = 'http://www.xmethods.net/sd/2001/TemperatureService.wsdl'
server = WSDL.Proxy(wsdlFile)
print(server.methods.keys())