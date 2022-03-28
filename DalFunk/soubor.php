<?php
//čtení obsahu souboru
//readfile('text.txt');
//otevření souboru
$text = fopen('text.txt','r');
//číst po B
echo fread($text,2) . "<br>";
//číst celý sobour
echo fread($text, filesize('text.txt')) . "<br>";
//zavření souboru
fclose($text);

//otevření souboru
$text1 = fopen('text.txt','r');
//čtení po řádcích
echo fgets($text1). "<br>";
echo fgets($text1). "<br>";
echo fgets($text1). "<br>";
//zavření souboru
fclose($text1);
?>