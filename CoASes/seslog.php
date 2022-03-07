<?php
session_start();
if (!isset($_SESSION['log'])) {
} else {
    echo "Je přihlášen";
    //echo "<form method='post' action='sesexit.php'><input type='submit'></form>";
}
?>

<html lang="cs">
<head>
    <meta charset="UTF-8">

</head>
<body>
<h1>Přihlášení</h1>
<form action="sescheck.php" method="post">

    <label for="custname">Jmeno:</label>
    <!--        input jako textové pole-->
    <input type="text" name="jmeno" id="custname" placeholder="Napište své přihlašovací údaje" autofocus><br>
    <!--Input pro heslo, skryté znaky-->
    <label for="custpas">Heslo:</label>
    <input type="password" id="custpas" name="heslo"><br>

    <!--    Submit button-->
    <input type="submit">
</form>

</body>
</html>
