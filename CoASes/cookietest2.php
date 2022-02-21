<?php
// Jednoduché vypsání hodnoty cookie s názvem 'Sušenka'
echo $_COOKIE['Susenka'];

// Složitější vypsání, kdy se nejdříve kontroluje, jestli cookie existuje a pak se případně vypíše
if(!isset($_COOKIE['Kolac'])) {
    echo "Cookie Koláč není nastavená";
} else {
    echo $_COOKIE['Kolac'];
}

//Přepis hodnoty skrz nové nastavení cookie s názvem 'Sušenka'
setcookie('Susenka', 'vanilka', time() + 1000, "/");
//Smazání cookie s nzávem 'Sušenka' skrz změnu jejího expiračního času
setcookie('Susenka', 'vanilka', time() - 1000, "/");

?>
