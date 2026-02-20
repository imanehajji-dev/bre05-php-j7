<?php
$password = $_POST['password'];                
$hash = password_hash($password, PASSWORD_DEFAULT);  

echo "Mot de passe : $password <br>";
echo "Mot de passe chiffré : $hash <br>";
?>