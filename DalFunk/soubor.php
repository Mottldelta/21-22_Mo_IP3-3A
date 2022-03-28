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
//čtení po řádcích do konce souboru
while(!feof($text1)) {
    echo fgets($text1) . "<br>";
}
//zavření souboru
fclose($text1);

//otevření souboru
$text2 = fopen('text.txt','r');
//čtení po znacích do konce souboru
while(!feof($text2)) {
    echo fgetc($text2) . "<br>";
}
//zavření souboru
fclose($text2);

//otevření souboru
$text3 = fopen('text.txt','w');
//zapisování do souboru
fwrite($text3, "Ahoj \nAHoj \nAhoj");
//zavření souboru
fclose($text3);

//otevření souboru
$text3 = fopen('text.txt','a');
//dopisování do souboru
fwrite($text3, "Ahoj \nAHoj \nAhoj");
//zavření souboru
fclose($text3);


?>