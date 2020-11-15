<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web/includes/css/bootstrap.css">
    <link rel="stylesheet" href="web/includes/css/style.css">
    <title>Accueil</title>
</head>
<body>

    <div class="container conteneur">

        <?php include('includes/templates/header_menu.php') ?>
        
        <br>

        <?php 

            if (isset($details) && $details=true) 
            {
                include('includes/templates/details_articles.php');
            }
            else if (isset($_GET['rubrique'])) 
            {
                include('includes/templates/list_articles_rubrique.php');
            }
            else if (isset($_GET['connexion'])) 
            {
                include('includes/templates/authentification/connexion.php');
            }
            else if(isset($_GET['gestion_articles']))
            {
                include('includes/templates/gestion_articles/home.php');
            }
            else if(isset($_GET['creation_article']))
            {
                include('includes/templates/gestion_articles/creation_article.php');
            }
            else if(isset($_GET['update_article']))
            {
                include('includes/templates/gestion_articles/modification_article_update.php');
            }
            else if(isset($_GET['modification_article']))
            {
                include('includes/templates/gestion_articles/modification_article.php');
            }
            else if(isset($_GET['creation_categorie']))
            {
                include('includes/templates/gestion_articles/creation_categorie.php');
            }
            else if (isset($_GET['update'])) 
            {
                include('includes/templates/gestion_articles/modification_categorie_update.php');
            }
            else if(isset($_GET['modification_categorie']))
            {
                include('includes/templates/gestion_articles/modification_categorie.php');
            }
            else if(isset($_GET['creation_user']))
            {
                include('includes/templates/gestion_users/creation_user.php');
            }
            else if(isset($_GET['afficher_user']))
            {
                include('includes/templates/gestion_users/afficher_user.php');
            }
            else if(isset($_GET['update_user']))
            {
                include('includes/templates/gestion_users/modification_user_update.php');
            }
            else if(isset($_GET['modification_user']))
            {
                include('includes/templates/gestion_users/modification_user.php');
            }
            else
            {
                include('includes/templates/list_articles.php');
            }

        ?>

    </div>

</body>
</html>