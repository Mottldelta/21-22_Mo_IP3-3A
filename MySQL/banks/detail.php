<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$get = $_GET['id'];
$sql = "SELECT id, name, email, country, currency FROM customers WHERE id = '$get'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>" . $row["name"] . "</b>" . "<br>";
        echo $row["email"] . "<br>";
        echo $row["country"] . "<br>";
        echo "Zůstatek na účtě činí: " . $row["currency"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

$adress = "seznam.php";
echo "<a href=". $adress .">Zpět na seznam zákazníků</a>" . "<br>";
?>

