<?php
// Práce s časem a datem
date_timezone_set('Europe/Prague');
echo date("d:i:sa") . "<br>";

//Include
include 'include.php';

//Hash
$pass = "heslo123";
$databazeheslo = hash('sha512',$pass);

if($databazeheslo == hash('sha512',$pass)) {
    echo "Zadané heslo se shoduje s heslem v databázi!<br>";
} else {
    echo "Zadané heslo se neshoduje!<br>";
}

//password_hash
$pass2 = "heslo12345";
$password1 =  password_hash($pass2, PASSWORD_DEFAULT);
echo $pass2 . " <br>";
echo $password1 . "<br>";

if (password_verify($pass2,$password1)) {
    echo "Hesla se shodují" . "<br>";
}


?>