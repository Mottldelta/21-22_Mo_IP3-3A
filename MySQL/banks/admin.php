<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";

$get = $_GET['id'];
$value = $_GET['suma'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE customers SET currency = currency - $value WHERE id = '$get'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Poplatek byl stržen" . "<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;


$adress = "detail.php?id=$get";
echo "<a href=". $adress .">Zpět na detail zákazníka</a>" . "<br>";
?>
