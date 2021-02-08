<?php


class CategoryRestHandler
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function findAll()
    {
        $query = "SELECT * FROM categories";

        try {
            $req = $this->_db->query($query);
            $result = $req->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function find($id)
    {
        $query = "SELECT * FROM categories WHERE id = ?";

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
