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

// nasobkydvou();

// cyklus - násobky tři
function nasobkytri() {
    $x = 3;
    while ($x <= 100) {
        echo $x . "<br>";
        $x = $x + 3;
    }
}
//nasobkytri();

// Cyklus For
function forcyklus() {
    $x = 4;
    for ($i = 0; $x <= 100; $i++) {
        echo $x . "<br>";
        $x+=4;
    }
}

//forcyklus();

function forsuda() {
    for ($i = 2; $i <= 100; $i+=2) {
        echo $i . "<br>";
    }
}
//forsuda();

// Cyklus foreach
function foreachcyklus() {
$pole = array(1, "slovo", 3, 4.5, 5);
foreach ($pole as $value) {
    echo $value . "<br>";
}
}
//foreachcyklus();

// Cyklus foreach - asoc.
function foreachasoccyklus() {
    $pole = array("auto1" => "BMW", "auto2" => "Volvo", "auto3" => "Toyota");
    foreach ($pole as $x => $value) {
        echo $x . " je ". $value . "<br>";
    }
}
//foreachasoccyklus();

// Cyklus foreach - asoc. (vek)
function foreachasoccyklus2() {
    $pole = array("Jan" => 18, "Pepa" => 20, "Daniel" => 22);
    foreach ($pole as $x => $value) {
        echo "student ". $x . " má ". $value . " let<br>";
    }
}
//foreachasoccyklus2();

function stastnychsedm() {
    for ($i = 1; $i <= 7; $i++) {
        $kolo = rand(1,10);
        if ($kolo == 7) {
            echo "V kole ". $i . ". se vylosovalo číslo 7! Hra končí!". "<br>";
            break;
        } else {
            echo "V kole ". $i . ". se vylosovalo číslo: ". $kolo . "<br>";}
    }
}
//stastnychsedm();

function stastnychsedm2() {
    $sedm = 0;
    $nesedm = 0;
    for ($i = 1; $i <= 7; $i++) {
        $kolo = rand(1,10);
        if ($kolo == 7) {
            echo "V kole ". $i . ". se vylosovalo číslo 7!". "<br>";
            $sedm++;
            continue;
        } else {
            echo "V kole ". $i . ". se vylosovalo číslo: ". $kolo . "<br>";}
        $nesedm++;
    }
    echo "Celkově bylo vytaženo číslo sedm: " . $sedm . "<br>";
    echo "Celkově nebylo vytaženo číslo sedm: ". $nesedm . "<br>";
}

//stastnychsedm2();

function ukoljedna() {
  $x = rand(0,100);
  $y = rand(0,100);
  $min = 0;
  $max = 0;
  $pojistka = 0;
  $pole = array();
  if ($x > $y) {
      $min = $y;
      $max = $x;
  } else {
      $min = $x;
      $max = $y;
  }
  if ($min == $max) {
      $pojistka++;
  }
  if ($pojistka == 1) {
      echo "čísla jsou stejná a cyklus nelze provést!";
  } else {
      $i = 0;
      for($min; $min <= $max;$min++) {
          $pole[$i] = $min;
          $i++;
      }
  }
  var_dump($pole);
}
//ukoljedna();

function ukoldva() {
$pole = array();
$chyba = rand(0,100);
for ($i = 0; $i <= 100; $i++) {
    if ($i == $chyba) {
        $pole[$i] = 101;
    } else {
    $pole[$i] = $i;
    }
}
for ($i = 0; $i <= 100; $i++) {
    if ($pole [$i] == 101) {
        echo "Chyba byla nalezena!";
        break;
    } else {
        echo $pole[$i] . "<br>";
    }
}
}
//ukoldva();

//ukol sudý a lichý index
function ukolsudlich() {
  $pole = array();
  for ($i = 0; $i <= 100; $i++) {
      if ($i % 2 == 0) {
          $pole[$i] = 1;
      } else {
          $pole[$i] = "cislo";
      }
  }
  var_dump($pole);
}
//ukolsudlich();


//Průvodčí
function pruvodci()
{
    $jizdenky = array("", "Dětská", 10, "Student", 20, "Dospělý", 50, "Senior", 20);
    $stanice = array("Jablonec nad Nisou", "Turnov", "Semily", "Železný brod");

    for ($i = 0; $i <= 2; $i++) {
        echo "<h2>Jsme ve stanici " . $stanice[$i] . "</h2>";
        echo "<b>Začíná nástup cestujících:" . "</b><br>";
        while ($i <= 2) {
            $cest = rand(1, 8);
            $pen = rand(0, 200);
            if ($cest % 2 == 0) {
                if ($jizdenky[$cest] > $pen) {
                    echo "pokusil se nastoupit: " . $jizdenky[$cest - 1] . " neměl dost peněz. Končí nástup" . "<br>";
                    break;
                } else {
                    echo "Nastoupil cestující kategorie: " . $jizdenky[$cest - 1] . "<br>";
                }
            } else {
                if ($jizdenky[$cest + 1] > $pen) {
                    echo "pokusil se nastoupit: " . $jizdenky[$cest] . " neměl dost peněz. Končí nástup" . "<br>";
                    break;
                } else {
                    echo "Nastoupil cestující kategorie: " . $jizdenky[$cest] . "<br>";
                }
            }
        }
    }
    echo "<h2>Vítejte v naší konečné stanici: " . $stanice[3] . "</h2>";
}

//Průvodčí 2.0
$jizdenky = array("", "Dětská", 10, "Student", 20, "Dospělý", 50, "Senior", 20);
$stanice = array("Jablonec nad Nisou", "Turnov", "Semily", "Železný brod");

for ($i=0; $i <= 2; $i++) {
    echo "<h2>Jsme ve stanici ". $stanice[$i] . "</h2>";
    echo "<b>Začíná nástup cestujících:" . "</b><br>";
    while ($i <= 2) {
        $cest = rand(1,8);
        while ($cest % 2 != 0) {
            $cest = rand(1,8);
        }
        $pen = rand(0,200);
            if ($jizdenky[$cest] > $pen) {
                echo "pokusil se nastoupit: " . $jizdenky[$cest-1] . " neměl dost peněz. Končí nástup" . "<br>";
                break;
            } else  {
                echo "Nastoupil cestující kategorie: " . $jizdenky[$cest-1] ."<br>";
            }

    }
}
echo "<h2>Vítejte v naší konečné stanici: " . $stanice[3] . "</h2>";



?>

