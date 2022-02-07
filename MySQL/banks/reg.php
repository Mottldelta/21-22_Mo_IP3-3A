<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";

$custname = $_POST['zakazjmeno'];
$custemail = $_POST['zakazemail'];
$custcountry = $_POST['zakazem'];
$custmoney = $_POST['zakazkonto'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO customers (name, email, country, currency)
  VALUES ('$custname', '$custemail', '$custcountry', '$custmoney')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nový zákazník byl vložen";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>