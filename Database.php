<?php
require 'Response.php';

class Database{
    private $connection;
    protected $statement;
    public function __construct($config, $username, $password){
        $dsn = 'mysql:'.http_build_query($config, '',';');

        $this->connection = new PDO($dsn,$username, $password,
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
    }

    public function query($query, $params = []){
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function fetchAll(){
        return $this->statement->fetchAll();
    }

    public function fetchAndAbort(){

        $data = $this->statement->fetch();

        if(!$data){
            abort(Response::NOT_FOUND);
        }
        return $data;
    }
}