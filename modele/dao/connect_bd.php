<?php
    $utilisateur = "test";
    $mot_de_passe = "passer";

    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=samaye_news", $utilisateur, $mot_de_passe);
    } 
    catch (PDOException $e) 
    {
        echo "La connexion a echouee ! -->".$e->getMessage();
    }
?>