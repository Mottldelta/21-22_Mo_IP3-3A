<?php
function podminka() {
    $x = 8;
    $y = 4;
    // Jednoduchá podmínka
    if ($y > $x) {
        echo "Ano, " . $y ." je větší než ". $x . "<br>";
    }
    // Jednoduchá podmínka – operator porovnání
    if ($y == $x) {
        echo "Ano, " . $y ." je rovno ". $x . "<br>";
    }
    //Podmínka – log. operator or
    if ($x == $y or $y > $x) {
        echo "Ano, " . $y ." je rovno, nebo je větší ". $x . "<br>";
    }
    //Podmínka – else
    if ($y == $x) {
        echo "Ano, " . $y ." je rovno ". $x . "<br>";
    } else {
        echo $y ." se nerovná ". $x . "<br>";
    }
    //Podmínka - elseif
    if ($y == $x) {
        echo "Ano, " . $y ." je rovno ". $x . "<br>";
    } elseif ($y > $x) {
        echo "Ano, " . $y ." je větší ". $x . "<br>";
    } else {
        echo "Ano, " . $x ." je větší ". $y . "<br>";
    }
}

// podminka();

// podmínka - úkol hodiny
function hodiny() {
    echo date("H");
    echo date("s");

    if (date("H") <= 12) {
        if (date("s") <= 30) {
            echo "Dobré dopoledne pane";
        } else {
            echo "Dobré dopoledne paní";
        }
    } else {
        if (date("s") <= 30) {
            echo "Dobré dopoledne pane";
        } else {
            echo "Dobré dopoledne paní";
        }
    }
}

// hodiny();

//podmínka switch
function switch1() {
    $x = "sýr";

    switch($x) {
        case "opice":
            echo "V Zoo je opice!";
            break;
        case "chameleon":
            echo "V Zoo je chameleon!";
            break;
        case "lev":
            echo "V Zoo je lev!";
            break;
        default:
            echo "V Zoo není žádné zvíře!";
            break;
    }

}

// switch1();

//podmínka switch - úkol hodiny
function switchhodiny() {
    $x = date("H");

    switch($x) {
        case $x <= 8:
            echo "Dobré ráno!";
            break;
        case $x >= 9 and $x <= 12:
            echo "Dobré dopoledne!";
            break;
        case $x >= 13 and $x <= 18:
            echo "Dobré odpoledne!";
            break;
        case $x >= 19:
            echo "Dobrou noc!";
            break;

    }

}

// switchhodiny();

// cyklus - while

function whileukazka() {
    $x = 0;

    while ($x < 6) {
        echo $x ."<br>";
        $x++;
    }
}

// whileukazka();

// cyklus - do... while
function whiledoukazka() {
    $x = 0;
    do {
        echo $x;
        $x++;
    } while ($x < 6);
}
// whiledoukazka();

// cyklus - násobky dvou
function nasobkydvou() {
    $x = 2;
    while ($x <= 100) {
        echo $x . "<br>";
        $x = $x + 2;
    }
}

nasobkydvou();
?>
