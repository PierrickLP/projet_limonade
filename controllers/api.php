<?php

require_once 'db_connect.php';

$posts = array();
$query = "SELECT * FROM promo";

$stmt = $db_con->prepare($query);
$stmt->execute();

while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

    $posts['tab'][] = $row;
}

echo json_encode($posts);