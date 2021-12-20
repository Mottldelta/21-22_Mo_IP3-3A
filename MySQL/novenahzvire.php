<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoo";

$name = array('Frenk', 'Henk', 'Fridrich', 'Buddy', 'John');
$randname = rand(0,4);
$animal = array('Shark', 'Doplhin', 'Sperm whale');
$randanimal = rand(0,2);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO animals (name, animal, class, IDrun)
  VALUES ('$name[$randname]', '$animal[$randanimal]', 'Mammalia', 1)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nový ". $animal[$randanimal] ." byl přidán do akvária. Jmenuje se " . $name[$randname] ;
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
