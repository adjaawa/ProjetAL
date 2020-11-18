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
            <form action="">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>  
                        <th scope="col">Username</th>  
                        <th scope="col">Profil</th>  
                        <th scope="col">Actions</th>  
                        </tr>
                    </thead>
                    <tbody>
                <?php

                    foreach($data as $user): 

                ?>
                    
                        <tr>
                        <th scope="row"><?php echo $user->id ?></th>
                        <td><?php echo $user->nom ?></td>
                        <td><?php echo $user->prenom ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php echo $user->username ?></td>
                        <td><?php echo $user->profil ?></td>
                        <td class="col-md-4">
                            <a href="index.php?modification_user=1&update_user=1&id=<?php echo $user->id ?>">Modifier</a>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <a href="index.php?modification_user=1&delete=1&id=<?php echo $user->id ?>">Supprimer</a>
                        </td>
                        </tr>
                    
                    <?php
                        endforeach;
                    ?>

                    </tbody>
                </table>
            </form>
        </div>
        <br>
    </div>

    </div>

    
</div>
