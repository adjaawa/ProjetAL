from flask import Flask, render_template, url_for, request, redirect
from suds.client import Client
import json

app = Flask(__name__)

# API SOAP Client
url = 'http://localhost/tp_al/mvc/avec_mvc/soap-ws/soap-ws/server.php?wsdl'
client = Client(url)


@app.route('/')
def index():
    return render_template('connexion.html')

@app.route('/home')
def home():
    result = client.service.get_users_soap()
    result = json.loads(result)

    return render_template('gestion.html', users = result)


@app.route('/deconnexion')
def deconnexion():
    return redirect(url_for('index'))



@app.route('/modifier_user/<string:username>')
def modifier_user(username):
    
    result = client.service.get_users_soap()
    result = json.loads(result)

    for i in result:
        if (i['username'] == username):
            return render_template('modifier.php', user=i)
 
    return render_template('gestion.html')


@app.route('/modifier', methods=['POST', 'GET'])
def modifier():

    nom = request.form['nom'] 
    prenom = request.form['prenom'] 
    email = request.form['email'] 
    username = request.form['username'] 
    password = request.form['password'] 
    profil = request.form['profil'] 
    id = request.form['id'] 
    
    result = client.service.update_user_soap(prenom, nom, email, username, password, profil, id)

    return redirect(url_for('home'))



@app.route('/supprimer/<string:username>', methods=['GET'])
def supprimer(username):
    result = client.service.delete_user_soap(username)
    return redirect(url_for('home'))



@app.route('/ajouter_user')
def ajouter_user():
    return render_template('ajouter.php')




@app.route('/ajouter', methods=['POST'])
def ajouter():

    if request.method == 'POST':
       nom = request.form['nom'] 
       prenom = request.form['prenom'] 
       email = request.form['email'] 
       username = request.form['username'] 
       password = request.form['password'] 
       profil = request.form['profil'] 
    
    result = client.service.add_user_soap(prenom, nom, email, username, password, profil)

    return redirect(url_for('home'))




@app.route('/login', methods=['POST'])
def login():

    result = client.service.get_users_soap()
    result = json.loads(result)

    if request.method == 'POST':
       username = request.form['username'] 
       password = request.form['password'] 

    for i in result:
        if ((i['username'] == username) and (i['password'] == password) and (i['profil'] == "admin")):
            return redirect(url_for('home'))

    return redirect(url_for('login'))


if __name__ == "__main__":
    app.run(debug = True)