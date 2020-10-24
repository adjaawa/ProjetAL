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

    <div class="container">

        <?php include('includes/templates/header_menu.php') ?>
        
        <br>

        <?php 

            if (isset($details) && $details=true) 
            {
                include('includes/templates/details_articles.php');
            }
            else
            {
                include('includes/templates/list_articles.php');
            }

        ?>

    </div>

</body>
</html>