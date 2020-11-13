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
                 
        </div>

        <div class="col-md-9 section-2"> 
            <h2 class="title">Modification Catégorie</h2>
            
            <form class="form-horizontal" action="index.php?modification_categorie=1&update=2" method="POST">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Nom catégorie</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nom" id="" placeholder="<?php echo $_POST['categorie']; echo $_POST['id']?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description catégorie</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="description" placeholder="">
                    <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                    <button type="submit" class="btn btn-default">Modifier Catégorie</button>
                    </div>
                </div>
            </form>

        </div>
        <br>
    </div>

    </div>

    
</div>
