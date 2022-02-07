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
        $sumauect = $row["currency"];
    }
} else {
    echo "0 results";
}
$conn->close();

$adress1 = "admin.php?id=$get&suma=20";
echo "<a href=". $adress1 .">Strhnout poplatek za kreditní kartu</a>" . "<br>";
$adress2 = "admin.php?id=$get&suma=100";
echo "<a href=". $adress2 .">Strhnout poplatek za vedení účtu</a>" . "<br>";
$adress3 = "admin.php?id=$get&suma=$sumauect";
echo "<a href=". $adress3 .">Vynulovat účet</a>" . "<br>";
$adress = "seznam.php";
echo "<a href=". $adress .">Zpět na seznam zákazníků</a>" . "<br>";
?>
<?php

?>
<br>
<form method="post" <?php $link = "vkladvyber.php?id=$get"; echo "action=$link"?>>
    <label for="suma">Suma:</label>
    <input type="number" name="suma" id="suma"><br>
    <label for="vyber">Výběr</label>
    <input type="radio" id="vyber" value="1" name="uloha">
    <label for="vklad">Vklad</label>
    <input type="radio" id="vklad" value="2" name="uloha">
    <input type="submit">
</form>


