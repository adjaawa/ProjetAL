from suds.client import Client
import json
url = 'http://localhost/tp_al/mvc/avec_mvc/soap-ws/soap-ws/server.php?wsdl'
client = Client(url)

print(client)

result = client.service.get_users_soap()
print(result)

result = json.loads(result)

print(result)


print("User 1") 
# for i in result:
#     for value in i.values():
#         print(value)

for i in result:
    print(i['prenom'])
    print(i['nom'])