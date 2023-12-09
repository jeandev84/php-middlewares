<?php
declare(strict_types=1);

namespace Framework\Component\Http\Middleware;


use Framework\Component\Http\Request;
use Framework\Component\Http\Response;

/**
 * Created by PhpStorm at 09.12.2023
 *
 * @MiddlewareInterface
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package Framework\Component\Http\Middleware
 */
interface MiddlewareInterface
{

      /**
       * @param Request $request
       * @param callable(Request): Response $next
       * @return Response
     */
     public function handle(Request $request, callable $next): Response;
}