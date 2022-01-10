<?php
echo "<h1>ADMIN banky</h1>";
$adress = "vloznahod.php";
echo "<a href=". $adress .">Vlož náhodného zákazníka</a>" . "<br>";
$adress2 = "seznam.php";
echo "<a href=". $adress2 .">Seznam zákazníků</a>" . "<br>";
$adress3 = "seznamspod.php?country=Spain";
echo "<a href=". $adress3 .">Seznam zákazníků ze Španělska</a>" . "<br>";
$adress4 = "seznamspod.php?country=Italy";
echo "<a href=". $adress4 .">Seznam zákazníků z Itálie</a>" . "<br>";

?>