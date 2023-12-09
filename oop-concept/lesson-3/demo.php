<?php

spl_autoload_register(function (string $classname) {
    require __DIR__."/components/$classname.php";
});


$product = new ShopProduct("часы", 100, new Author("Алексей", "Борисов"));
$saller  = new Saller();

echo  $saller->sale($product, 0.2), "\n";
echo  $saller->sale($product, 0), "\n";