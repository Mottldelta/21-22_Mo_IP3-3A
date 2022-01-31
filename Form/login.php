<?php
$user = "Kuba";
$password = "jabko";

$zadjmen = $_POST['zakazjmeno'];
$zadheslo = $_POST['zakazheslo'];

if ($user === $zadjmen and $password === $zadheslo) {
    echo "Jste přihlášen";
} else {
    echo "špatné heslo, nebo špatné jméno";
}
?>