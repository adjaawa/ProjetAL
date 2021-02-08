<?php

require_once 'src/Database/ConnexionManager.php';

/** Récuperation d'une instance de la BDD */

$db = (new Database())->getConnection();
