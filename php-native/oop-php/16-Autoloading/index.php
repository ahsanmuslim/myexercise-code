<?php

// require_once 'App/Mobil/infoMobil.php';
// require_once 'App/Mobil/mobilSport.php';
// require_once 'App/Mobil/mobilBarang.php';
// require_once 'App/Mobil/Mobil.php';


require_once 'App/init.php';

$mobilBarang1 = new mobilBarang("Krem", "Truk Fuso", "Rp. 1.000.000.000", "Diesel", "Mitsibishi", "20 ton");
$mobilSport1 = new mobilSport("Silver","SUV", "RP. 400.000.000", "Diesel","GT-303","250 km/jam");

echo $mobilBarang1->getInfoLengkap();
echo "<br>";
echo $mobilSport1->getInfoLengkap();

?>