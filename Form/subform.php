<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";

$cusname = $_POST['zakazjmeno'];
$cusgender = $_POST['zakazapoh'];
$cuspass = $_POST['zakazheslo'];
$cusdate = $_POST['zakazdat'];
$cuscat = $_POST['zakazkat'];
$custype = $_POST['zakaztyp'];
$cusmess = $_POST['zakazzprav'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO customers (name, gender, password, date, categories, acctype, message)
  VALUES ('$cusname', '$cusgender', '$cuspass', '$cusdate', '$cuscat', '$custype', '$cusmess')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nový zákazník byl vložen";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>