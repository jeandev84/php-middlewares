<?php
declare(strict_types=1);

namespace Framework;


use Framework\Component\Http\Contract\Handler;
use Framework\Component\Http\Pipeline;
use Framework\Component\Http\Request;
use Framework\Component\Http\Response;

/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Application
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package Framework
 */
final class Application
{


      /**
       * @param Handler $handler
       *
       * @param array $middlewares
      */
      public function __construct(
          private readonly Handler $handler,
          private readonly array $middlewares
      )
      {
      }

      public function handle(Request $request): Response
      {
          /* return $this->handler->handle($request); */

          return (new Pipeline($this->handler, $this->middlewares))
                 ->handle($request);
      }
}