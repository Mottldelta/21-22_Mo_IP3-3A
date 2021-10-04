<h1>Můj první PHP skript</h1>
<?php
// php řádkový komentář
# php řádkový komentář
/* komentář
na
více řádků
 */
echo "Hello world!<br>" /*komentář v kódu*/
;
$x = "Hello world2!<br>";
echo $x;

$y = 5;
$z = 6;
echo "hello" . $y . "!<br>";
echo $y + $z . "<br>";

//Funkce
function scitani()
{
    $a = 5;
    $b = 6;
    echo $a + $b . "<br>";
}

scitani();

//Funkce 2.0 (globální proměnná)
function scitanii()
{
    global $y, $z;
    echo $y + $z . "<br>";
}

scitanii();

//Funkce 3.0 ($GLOBALS)
function scitani2()
{
    $v = $GLOBALS['y'] + $GLOBALS['z'];
    echo $v . "<br>";
}

scitani2();

//Funkce 3.0 (statická proměnná)
function statickap()
{
    static $u = 0;
    echo $u;
    $u++;
}

statickap();
statickap();
statickap();
statickap();
statickap();
echo "<br>";

//Echo

echo "<h2>Nadpis 2</h2><br>";
echo "Hello ", "world<br>";
echo "Hello " . $z . " world<br>";
print "Hello<br>";

echo "<h1>2. hodina – pokračování v Úvodu do PHP</h1><br>";

//rozvcička 2. hodina (globální proměnná) – Funkce sečte dvě globální promměnné

$u = 2;
$v = 5;

function scitanglobpromen()
{
    global $u, $v;
    echo $u + $v;
}

scitanglobpromen();

//Určování typu proměnné
var_dump($u);
$g = "ahoj";
var_dump($g);
$bin = 0b100101;
var_dump($bin);
$hex = 0xAF;
var_dump($hex);
$f = 1.2;
var_dump($f);
$Pole = array(12, "ahoj", 2.1);
echo $Pole[0];
var_dump($Pole);

//Práce s txt řetězci
$txt = "Hello world!";
$txt1 = "Stave";
echo $txt;
echo strlen("Hello world!") . "<br>";
echo str_word_count("Hello world!") . "<br>";
echo strrev("Hello world!") . "<br>";
echo strpos("Hello world!", "world!") . "<br>";
echo str_replace("Hello", "Welcome", "Hello world!") . "<br>";
echo $txt . $txt1 . "<br>";

//úkol – dvě proměnné --> slít do jedné --> vypsat se změnou "Steve" na vaše jméno
$prom = "Hello ";
$prom1 = "Steve";
$prom .= $prom1;
echo str_replace("Steve", "Jan", $prom) . "<br>";

//float a int
$l = 1.92;
var_dump(is_float($l));
$d = (int)$l;
var_dump($d);

//matematické operace
echo pi() . "<br>";
echo (max(0, 1, 2, 5)) . "<br>";
echo abs(-5.7) . "<br>";
echo sqrt(250) . "<br>";
echo round(2.9) . "<br>";
echo rand(0, 10) . "<br>";


//úkol funkce vytvoří dvě náhodná čísla od 1 do 25 a ty vypíše. Následně je vynásobí a vypíše výsledek!
function nasob()
{
    $a = rand(1, 25);
    $b = rand(1, 25);
    echo "prom 1: " . $a . " prom 2: " . $b . "<br>";
    echo "nasob: " . $a * $b . "<br>";

}

nasob();

//konstanty
define("Ahoj", "Steve");
echo Ahoj . "<br>";
define("auta", ["Bmw", "Volvo", "Toyota"]);
echo auta[1] . "<br>";

//operatory ukázky

$p = 100;
$z = "100";
var_dump($p === $z);
?>

