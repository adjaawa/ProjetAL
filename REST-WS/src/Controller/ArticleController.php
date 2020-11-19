<?php

require_once "src/RestHandler/ArticleRestHandler.php";


class ArticleController
{
    private $_db;
    private $_requestMethod;
    private $_id;
    private $_id_categorie;
    private $_repository;

    public function __construct($db, $requestMethod, $id = null, $category = null)
    {
        $this->_db = $db;
        $this->_requestMethod = $requestMethod;
        $this->_id = $id;
        $this->_id_categorie = $category;
        $this->_repository = new ArticleRestHandler($db);
    }

    public function handleRequest()
    {
        switch ($this->_requestMethod) {
        case 'GET':
            if ($this->_id) {
                $response = $this->getArticle();
            } else {
                $response = $this->getArticles();
            }
            break;

        default:
            $response = $this->notFoundResponse();
            break;
        }

        header($response['status']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    private function getArticles()
    {
        if ($this->_id_categorie) {
            $data = $this->_repository->findAll($this->_id_categorie);
        } else {
            $data = $this->_repository->findAll();
        }
        $response['status'] = 'HTTP/1.1 200 OK';
    
        $response['body'] = json_encode($data, JSON_PRETTY_PRINT);
        return $response;
    }

    private function getArticle()
    {
        $data = $this->_repository->find($this->_id);
        if (!$data) {
            return $this->notFoundResponse();
        }
        $response['status'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($data, JSON_PRETTY_PRINT);
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = json_encode(['Code' => 404, 'Message' => 'Pas d\'enregistrement!']);
        return $response;
    }

    public function encodeXml ($responseData) { 

        // Create an object SimpleXMLElement 
        $xml = new SimpleXMLElement ( '<article> </article> <xml version = "1.0"??>'); 
        foreach ($responseData as $key => $value) { 
            $xml -> addChild ($key , $value); 
        } 
        return $xml -> asXML () ; 
    }
}
