<?php
$user = 0;
$password = 0;

$zadjmen = $_POST['zakazjmeno'];
$zadheslo = $_POST['zakazheslo'];

//if ($user === $zadjmen and $password === $zadheslo) {
//    echo "Jste přihlášen";
//} else {
//    echo "špatné heslo, nebo špatné jméno";
//}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, password FROM customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["name"] === $zadjmen) {
            $user = $row["id"];
        }
        if($row["password"] === $zadheslo) {
            $password = $row["id"];
        } ;
    }
} else {
}

$conn->close();

if ($user != 0 and $password != 0) {
    echo "zakazník přihlášen";
} elseif ($user != 0 and $password == 0){
    echo "špatné heslo";
} elseif ($user == 0 and $password != 0){
    echo "špatné jméno";
} else {
    echo "údaje nesprávné";
}
?>
