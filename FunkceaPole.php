<?php declare(strict_types=1);

function scitani() {
    echo 5 + 2;
}
//scitani();


// Funkce s argumentem

function scitaniuni($argument1, $argument2) {
    echo $argument1 + $argument2;
}
//scitaniuni(5, 7);
//scitaniuni(2, 8);

// Funkce s argumentem 2.0

function roknarozeni($jmeno, $rok) {
    echo $jmeno . " se narodil v roce " . $rok . "<br>";
}
//roknarozeni("Jan", 2001);
//roknarozeni("Pepa", 1999);

// Funkce s argumentem - datový typ

function roknarozeni2(string $jmeno, int $rok) {
    echo $jmeno . " se narodil v roce " . $rok . "<br>";
}
//roknarozeni2("Jan", 2001);
//roknarozeni2("Pepa", 1999);

// Funkce s argumenty - return

function nasobeni(int $x, int $y) {
    $z = $x * $y;
    return $z;
}

//echo "Násobek čísel 5 a 7 je " . nasobeni(5,7);
//echo "Násobek čísel 15 a 8 je " . nasobeni(15,8);

// Funkce s argumenty - return

function nasobeni2(float $x, float $y) : float{
    $z = $x + $y;
    return $z;
}

//echo "Násobek čísel 5 a 7 je " . nasobeni2(5.5,7.8);
//echo "Násobek čísel 15 a 8 je " . nasobeni2(15.6,8.2);


//Pole

$pole = array(1,"Jan",2, "Pepa");
//echo $pole[1];

//Pole – asociativním pole

$asocpole = array("Petr" => 12,"Jan" => 2, "Pepa" => 18);
//echo $asocpole["Petr"];


// Cyklus foreach - asoc.
function foreachasoccyklus() {
    $pole = array("auto1" => "BMW", "auto2" => "Volvo", "auto3" => "Toyota");
    foreach ($pole as $x => $value) {
        echo $x . " je ". $value . "<br>";
    }
}
// foreachasoccyklus();


// Cyklus foreach - asoc.
function foreachasoccyklus2() {
    $pole = array("Jan" => "Hradec Králové", "Petr" => "Pardubice", "Dušan" => "Most");
    foreach ($pole as $x => $value) {
        echo $x . " se narodil v ". $value . "<br>";
    }
}
// foreachasoccyklus2();

// multidemenzionální pole

$admin = array(array("Jan", 23, "České", "Jablonec nad Nisou"), array("Petra", 19, "Slovenské", "Bratislava"), array ("Standa", 25, "České", "Pardubice"));
echo $admin[0][2];
echo $admin[1][2];
echo $admin[2][2];

?>
