<?php
if(!isset($_COOKIE['klik'])) {
    setcookie('klik',0,time()+2000,"/");
} else {
    echo "Počet kliknutí je " . $_COOKIE['klik'] . "<br>";
}
?>

<html>
<form>
    <button onclick="<?php click() ?>">Click!</button>
</form>
</html>

<?php

function click() {

}
?>
