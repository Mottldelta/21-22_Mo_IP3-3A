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

//Funkce 2.0 (globální proměná)
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

//Funkce 3.0 (statická proměná)
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

echo "<h1>Nadpis 1</h1><br>";
echo "Hello ", "world<br>";
echo "Hello ". $z ." world<br>";
print "Hello";
?>

