<?php
declare(strict_types=1);

namespace App\Middleware;


use Framework\Component\Http\Middleware\MiddlewareInterface;
use Framework\Component\Http\Request;
use Framework\Component\Http\Response;
use Framework\Component\Http\Status;

/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Validation
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package App\Middleware
 */
final class Validation implements MiddlewareInterface
{

    public function handle(Request $request, callable $next): Response
    {
         if ($request->title === '') {
             return new Response(Status::BAD_REQUEST);
         }

         return $next($request);
    }
}