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
            <h2 class="title" style="color: #7E53FF;">Modification Article</h2>
            
            <form class="form-horizontal" action="index.php?modification_article=1&update_article=2&id=<?php echo $article[0]->id ?>" method="POST">

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Titre Article</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="titre" id="" placeholder="" value="<?php echo $article[0]->titre; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text" class="col-sm-2 control-label">Catégorie Article</label>
                    <div class="col-sm-2">
                    <select  type="text" name="categorie" id="pav" class="form-control" required style="background-color:;">
                        <?php foreach($categorie as $cat): ?>

                            <option value="<?php echo $cat->id ?>"><?php echo $cat->nom ?></option>

                        <?php endforeach; ?>
                    </select >
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Résumé Article</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="resume" id="" placeholder="" value="<?php echo $article[0]->resume; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Article complet</label>
                    <div class="col-sm-10">
                    <textarea id="story" name="contenu" rows="15" cols="106"> <?php echo $article[0]->titre; ?>" </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Modifier Article</button>
                    </div>
                </div>
            </form>

        </div>
        <br>
    </div>

    </div>

    
</div>
