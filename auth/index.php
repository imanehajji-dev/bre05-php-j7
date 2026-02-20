<?php

session_start(); 

require 'connexion.php';

if (isset($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route = NULL;
}

require 'layout.phtml';

?>