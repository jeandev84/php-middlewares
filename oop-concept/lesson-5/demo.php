<?php

spl_autoload_register(function (string $classname) {
    require __DIR__."/components/$classname.php";
});


$car = new MegaCar();
$car->startEngine();
$car->stopEngine();
