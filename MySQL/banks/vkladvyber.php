<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";

$suma = $_POST['suma'];
$uloha = $_POST['uloha'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE customers SET currency = currency + $suma WHERE ";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nový zákazník byl vložen";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>