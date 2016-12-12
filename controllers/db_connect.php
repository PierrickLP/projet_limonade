<?php
$db_hostname = "localhost";
$db_user = "cir32016";
$db_password = "cir32016";
$db_name = "doc_rentree";

try{

    $db_con = new PDO("mysql:host={$db_hostname};dbname={$db_name}",$db_user,$db_password);

}catch(PDOException $x){

    die($x->getMessage());
}