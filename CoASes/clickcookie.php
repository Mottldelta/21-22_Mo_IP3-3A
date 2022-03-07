<?php
//Pokud ještě uživatel nehrál, tak se musí nastavit nová hra skrz set-up cookie s názvem "klik", v druhém případě se vypíše cookie a její hodnota.
if(!isset($_COOKIE['klik'])) {
    setcookie('klik',0,time()+2000,"/");
    echo "Počet kliknutí je " . $_COOKIE['klik'] . "<br>";
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
//funkce se volá v případě kliknutí na button v rámci form v html. Následně zvyšuje číslo a přepisuje hodnotu cookie "klik"
function click() {
    $numclick = $_COOKIE['klik'] + 1;
    setcookie('klik',$numclick,time()+2000,"/");
}
?>