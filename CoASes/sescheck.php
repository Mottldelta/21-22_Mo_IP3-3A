<?php
session_start();
$user = 'username';
$pass = 12345;

$prihlasjmeno = $_POST['jmeno'];
$prihlasheslo = $_POST['heslo'];

if ($prihlasjmeno === $user and $prihlasheslo == $pass){
    $_SESSION['log'] = 'prihlasen';
    echo "Jste přihlášen";
} else {
    echo "špatné heslo a jméno";
}

?>