<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "imanehajji_php_j7";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "imanehajji";
$password = "7cd2720849fe8bc55a5feb72a64cfc0c";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

?>