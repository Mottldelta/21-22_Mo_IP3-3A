<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";


try {
    $sum = $_POST['suma'];
    $uloh = $_POST['uloha'];
    $id = $_GET['id'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($uloh == 1) {
    $sql = "UPDATE customers SET currency = currency-$sum WHERE id = $id";
    }
    if ($uloh == 2) {
        $sql = "UPDATE customers SET currency = currency+$sum WHERE id = $id";
    }
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Transakce proběhla";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>