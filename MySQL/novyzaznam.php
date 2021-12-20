<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoo";

$name = 'Frenk';
$animal = 'Shark';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO animals (name, animal, class, IDrun)
  VALUES ('$name', '$animal', 'Mammalia', 1)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nový ". $animal ." byl přidán do akvária. Jmenuje se " . $name ;
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
