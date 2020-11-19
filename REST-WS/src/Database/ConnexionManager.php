<?php

/**
 * Connexion à la base de données MYSQL
 */

class Database
{
    private $_db;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "samaye_news";
        $user = "root";
        $pass = "";

        try {
            $this->_db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            exit("Connection to database failed: " .$e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->_db;
    }
}
