<?php

require __DIR__.'/../vendor/autoload.php';

$app = new \Framework\Application(
    handler: new \App\Kernel()
);

$request  = new \Framework\Component\Http\Request(uniqid());
$response = $app->handle($request);

dd($response);