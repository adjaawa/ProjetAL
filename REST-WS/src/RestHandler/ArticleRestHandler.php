<?php


class ArticleRestHandler
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function findAll($category=null) {
        
        if ($category) {            
            $query = "SELECT * FROM articles art INNER JOIN categories cat ON art.id_categorie = cat.id WHERE art.id_categorie = $category";       
        }
        else {
            $query = "SELECT * FROM articles ORDER BY id_categorie";
        }

        try {
            $req = $this->_db->query($query);
            $result = $req->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function find($id) {

        $query = "SELECT * FROM articles WHERE id = ?";

        try {
            $req = $this->_db->prepare($query);
            $req->execute([$id]);
            $result = $req->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }


}
