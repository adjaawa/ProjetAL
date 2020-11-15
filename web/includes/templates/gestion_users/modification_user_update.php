<div class="container">
    <div class="row">
        <div class="col-md-3 section-1"> 
            <div class="row titre-menu">
                <center>
                    <h3 style="text-align:center; color:; font-weight:bolder; opacity:0.8;">GESTION ARTICLES</h3>
                </center>
            </div>
            <br>

            <div class="row menuR">
                <div class="col-md-12 menu">
                    <a href="index.php?creation_article=1"><div class="row bordureMenu" style="font-weight: bold;">Créer un nouvel article</div></a>
                </div>
            </div>
            <div class="row menuR">
                <div class="col-md-12 menu">
                    <a href="index.php?modification_article=1"><div class="row bordureMenu" style="font-weight: bold;">Modifier/Supprimer article</div></a>
                </div>
            </div>
            <div class="row menuR">
                <div class="col-md-12 menu">
                    <a href="index.php?creation_categorie=1"><div class="row bordureMenu" style="font-weight: bold;">Créer une nouvelle catégorie</div></a>
                </div>
            </div>
            <div class="row menuR">
                <div class="col-md-12 menu">
                    <a href="index.php?modification_categorie=1"><div class="row bordureMenu" style="font-weight: bold;">Modifier/Supprimer catégorie</div></a>
                </div>
            </div>


            <br>
            
            <?php 

                if($_SESSION['profil'] == "admin")
                {
                    include("C:/xampp/htdocs/tp_al/mvc/avec_mvc/web/includes/templates/inc/menu_users.php");
                }                    
                     
            ?>

                 
        </div>

        <div class="col-md-9 section-2"> 
            <h2 class="title" style="color: #7E53FF;">Modification Utilisateur</h2>
            
            <br>
            <form class="form-horizontal" action="index.php?modification_user=1&update_user=2&id=<?php echo $thisUser[0]->id ?>" method="POST">

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Prenom</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?php echo $thisUser[0]->prenom ?>" name="prenom" id="" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?php echo $thisUser[0]->nom ?>" name="nom" id="" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Nom d'utilisateur</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" value="<?php echo $thisUser[0]->username ?>" name="username" id="" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Mot de passe</label>
                    <div class="col-sm-5">
                    <input type="password" class="form-control" name="password" id="" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                    <input type="email" class="form-control" value="<?php echo $thisUser[0]->email ?>" name="email" id="" placeholder="">
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
        <br>
    </div>

    </div>

    
</div>
