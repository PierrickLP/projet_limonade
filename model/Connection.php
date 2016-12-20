<?php


class Connection {
    private $connection;
    private $dbconnect;
    private $host = "localhost";
    private $user = "cir32016";
    private $pass = "cir32016";
    private $db   = "doc_rentree";


    public function __construct() {
        $this->dbconnect = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function query($sql) {
        $sth = $this->dbconnect->prepare($sql);
        $sth->execute(array_slice(func_get_args(),1));
        return $this->dbconnect->query($sql);
    }

    public static function connection(){
        if(!isset($connection)){
            $connection = new Connection();
        }
        return $connection;
    }
}