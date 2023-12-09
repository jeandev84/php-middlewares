<?php
declare(strict_types=1);

namespace Framework\Component\Http;


use Framework\Component\Http\Contract\Handler;
use Framework\Component\Http\Middleware\MiddlewareInterface;

/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Pipeline
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package Framework\Component\Http
 */
class Pipeline
{

     /**
      * @param Handler $handler
      * @param list<MiddlewareInterface> $middlewares
     */
     public function __construct(
         private readonly Handler $handler,
         private array $middlewares
     )
     {
     }



     public function handle(Request $request): Response
     {
           $middleware = array_shift($this->middlewares);

           if ($middleware !== null) {
               return $middleware->handle($request, [$this, 'handle']);
           }

           return $this->handler->handle($request);
     }
}