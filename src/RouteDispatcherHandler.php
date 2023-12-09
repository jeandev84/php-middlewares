<?php
declare(strict_types=1);

namespace Framework;


use Framework\Component\Http\Contract\Handler;
use Framework\Component\Http\Request;
use Framework\Component\Http\Response;
use Framework\Component\Http\Status;

/**
 * Created by PhpStorm at 09.12.2023
 *
 * @RouteDispatcherHandler
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package App
 */
class RouteDispatcherHandler implements Handler
{

    public function handle(Request $request): Response
    {
        usleep(100);

        return new Response(Status::OK, $request->getContent());
    }
}