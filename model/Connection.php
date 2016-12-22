<?php


class Connection {
    private $connection;
    private $dbconnect;
    private $db   = "doc_rentree";
    private $host = "localhost";
    private $user = "cir32016";
    private $pass = "cir32016";


    public function __construct() {
        $this->dbconnect = new PDO('mysql:dbname='.$this->db.';host='.$this->host, $this->user, $this->pass);
    }

    public function query($sql) {
        $sth = $this->dbconnect->prepare($sql);
        $sth->execute(array_slice(func_get_args(),1));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function connection(){
        if(!isset($connection)){
            $connection = new Connection();
        }
        return $connection;
    }
}