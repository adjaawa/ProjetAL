<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url_for("static", filename="css/bootstrap.css") }}">
	<link rel="stylesheet" href="{{ url_for("static", filename="css/style.css") }}">
    <title>Accueil</title>
</head>
<body>

    <div class="container conteneur">

        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
                <center>
                    <h1 style="font-weight: 800; color:#7E53FF;">ESPACE ADMIN (SOAP)</h1>
                </center>
                <br>
                
                <center>
                    <h2 style="font-weight: 600">Gestion des utilisateurs</h2>
                </center>
            </div>
        </div>
        <br><br>

      
    
        <div class="col-md-12">
            

            <div class="col-md-9 section-2"> 
                <h2 class="title" style="color: #7E53FF;">Création Utilisateur</h2>
                
                <br>
                <form class="form-horizontal" action="http://localhost:5000/ajouter" method="POST">

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Prenom</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control" name="prenom" id="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Nom</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control" name="nom" id="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" id="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Nom d'utilisateur</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" id="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Mot de passe</label>
                        <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" id="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label">Profils</label>
                        <div class="col-sm-2">
                        <select type="text" name="profil" class="form-control" required>
                            <option value="admin">Admin</option>
                            <option value="editeur">Editeur</option>
                        </select >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Ajouter Utilisateur</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

</body>
</html>
