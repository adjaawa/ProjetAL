<?php
    $username = "test";
    $password = "passer";

    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=samaye_news", $username, $password);
    } 
    catch (PDOException $e) 
    {
        echo "La connexion a echouee ! -->".$e->getMessage();
    }
?>