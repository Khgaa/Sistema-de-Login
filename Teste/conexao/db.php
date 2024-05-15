<?php

class Database{

    const HOST = "localhost";
    const NAME = "bootstrap-demo";
    const USER = "root";
    const PASS = "";

    private $login;
    private $connection;

    public function _construct($login = null){
        $this->table = $login;
        $this->setconnection();
    }

    private function setconnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die('erro de conexao');
        }
    }

    public function executarquery($query, $params = []){
        try{
            $this->_construct();
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function selectDados($select){
        $query = $select;
        return $this->executarquery($query);
    }
}
?>