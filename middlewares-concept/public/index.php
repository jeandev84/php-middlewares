<?php

require __DIR__.'/../vendor/autoload.php';

// write all log of stdout
$logger = new \Monolog\Logger('main',  [
    new \Monolog\Handler\StreamHandler('php://stdout')
]);

$app = new \Framework\Application(
    handler: new \Framework\RouteDispatcherHandler(),
    middlewares: [
        new \App\Middleware\Logging($logger),
        new \App\Middleware\Validation()
    ]
);

# $request  = new \Framework\Component\Http\Request(uniqid(), ''); return BAD REQUEST
$request  = new \Framework\Component\Http\Request(uniqid(), 'asssss');
$response = $app->handle($request);
#dd($response);