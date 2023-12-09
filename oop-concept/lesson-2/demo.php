<?php

spl_autoload_register(function (string $classname) {
    require __DIR__."/components/$classname.php";
});

$product1 = new ShopProduct("Мастер и Маргарита", 25, new Author("Булгаков", "Михайл"));
echo "\n--------------------------------------------------------------------------------------------------------------\n";
$product2 = new ShopProduct("Лабиринты Exo", 40, new Author("Фрай", "Макс"));