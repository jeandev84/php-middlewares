<?php

spl_autoload_register(function (string $classname) {
    require __DIR__."/components/$classname.php";
});


$cd = new DigitalProduct("Metallica", 350, "cd", 670, new Author("Алексей", "Борисов"));

echo $cd->getInfo(), PHP_EOL;
