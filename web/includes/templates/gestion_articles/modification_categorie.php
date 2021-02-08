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
            <h2 class="title" style="color: #7E53FF;">Modification catégorie</h2>
            
            <form class="form-horizontal" action="index.php?modification_categorie=1&update=1" method="POST">

                <div class="form-group">
                    <label for="text" class="col-sm-4 control-label">Sélectionner une catégorie à modifier </label>
                    <div class="col-sm-2">
                    <select  type="text" name="categorie" id="pav" class="form-control" required style="background-color:;">
                        <?php foreach($categorie as $cat): ?>

                            <option value="<?php echo $cat->nom ?>"><?php echo $cat->nom ?></option>

                        <?php endforeach; ?>
                    </select >
                    <input type="hidden" name="id" value="<?php echo $cat->id ?>">
                    </div>

                    <button type="submit" class="btn btn-default">Valider</button>
                </div>

            </form>
             <br> 

            <h2 class="title">Suppression catégorie</h2>

            <form class="form-horizontal" action="index.php?modification_categorie=1&delete=1" method="POST">

                <div class="form-group">
                    <label for="text" class="col-sm-4 control-label">Sélectionner une catégorie à modifier </label>
                    <div class="col-sm-2">
                    <select  type="text" name="categorie" id="pav" class="form-control" required style="background-color:;">
                        <?php foreach($categorie as $cat): ?>

                            <option value="<?php echo $cat->id ?>"><?php echo $cat->nom ?></option>

                        <?php endforeach; ?>
                    </select >
                    
                    </div>

                    <button type="submit" class="btn btn-default">Valider</button>
                </div>

            </form>

        </div>
        <br>
    </div>

    </div>

    
</div>
