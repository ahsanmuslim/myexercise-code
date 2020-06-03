<?php

// require_once 'App/Mobil/infoMobil.php';
// require_once 'App/Mobil/mobilSport.php';
// require_once 'App/Mobil/mobilBarang.php';
// require_once 'App/Mobil/Mobil.php';


// atau menggunakan cara 2 ==> closure
spl_autoload_register (function($class){

    require_once __DIR__. '/Mobil/'. $class . '.php';

});


?>