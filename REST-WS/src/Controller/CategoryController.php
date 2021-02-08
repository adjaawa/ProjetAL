<?php

require_once "src/RestHandler/CategoryRestHandler.php";


class CategoryController
{
    private $_db;
    private $_requestMethod;
    private $_id;
    private $_repository;

    public function __construct($db, $requestMethod, $id = null)
    {
        $this->_db = $db;
        $this->_requestMethod = $requestMethod;
        $this->_id = $id;
        $this->_repository = new CategoryRestHandler($db);
    }

    public function handleRequest()
    {
        switch ($this->_requestMethod) {
        case 'GET':
            if ($this->_id) {
                $response = $this->getCategory();
            } else {
                $response = $this->getCategories();
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

    private function getCategories()
    {
        $data = $this->_repository->findAll();
        $response['status'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($data,JSON_PRETTY_PRINT);
        return $response;
    }

    private function getCategory()
    {
        $data = $this->_repository->find($this->_id);
        if (!$data) {
            return $this->notFoundResponse();
        }

        $response['status'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($data,JSON_PRETTY_PRINT);
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = json_encode(['code' => 404, 'message' => 'Pas d\'enregistrement']);
        return $response;
    }
}
