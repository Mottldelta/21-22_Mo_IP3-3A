<?php
session_start();
$user = 'username';
$pass = hash('md5','tajneheslo');

$prihlasjmeno = $_POST['jmeno'];
$prihlasheslo = $_POST['heslo'];

if ($prihlasjmeno === $user and hash('md5',$prihlasheslo) == $pass){
    $_SESSION['log'] = 'prihlasen';
    echo "Jste přihlášen";
} else {
    echo "špatné heslo a jméno";
}

?>