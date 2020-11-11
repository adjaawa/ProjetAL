<?php 
    //choix du nombre d'article par page
    $nb_articles_par_page = '1';

    //Verification de la valeur $_GET['page']
    if(isset($_GET['page']) && $_GET['page'] != '')
    {
        $page = (int)$_GET['page'];
    }
    else
    {
        $page = 0; //si elle n'existe pas, on la met a 0 (page 0)
    }

    //On défini l'id minimum de l'article pour être affiché
    $min_id = $page*$nb_articles_par_page;

    //On défini l'id maximum de l'article pour être affiché
    $max_id = $min_id+$nb_articles_par_page;

    //On défini le nombre maximum de pages
    $max_page = sizeof($data)/$nb_articles_par_page;
    
    foreach($data as $article): 
        if ($article->id > $min_id && $article->id <= $max_id) 
        {
?>

            <form action="index.php" method="post">
                <div class="well lewell">
                    <h1 style="font-weight:bolder; color:white;">
                        <?php echo $article->titre;?>
                    </h1>
                    <br>
                    <h4 style="font-weight:bolder; color:white;">
                        <?php echo $article->resume;?>
                    </h4>
                    <br>
                    <p><input type="submit" class="btn btn-primary btn-sm btn-esp" value="EN SAVOIR PLUS" role="button"></p>
                    <input type="hidden" name="article" value="<?php echo $article->id  ?>">
                </div>

                <nav aria-label="...">
                    <ul class="pager">
                        <li class="<?php if ($page == 0) { echo "previous disabled";} else { echo "previous"; }?>"><a href="?page=<?php if ($page == 0) { echo $page;} else { echo $page-1;} ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
                        <li class="<?php if ($page == $max_page-1) { echo "next disabled";} else { echo "next"; }?>"><a href="?page=<?php if ($page == $max_page-1) { echo $page;} else {echo $page+1;} ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
                    </ul>
                </nav>
            </form>

<?php   }
    endforeach; 
?>  