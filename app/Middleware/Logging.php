<?php
declare(strict_types=1);

namespace App\Middleware;


use Framework\Component\Http\Middleware\MiddlewareInterface;
use Framework\Component\Http\Request;
use Framework\Component\Http\Response;
use Psr\Log\LoggerInterface;

/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Logging
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package App\Middleware
 */
final class Logging implements MiddlewareInterface
{

    public function __construct(
        private readonly LoggerInterface $logger
    )
    {
    }

    public function handle(Request $request, callable $next): Response
    {
         $this->logger->info('Request.', [
             'request_id' => $request->requestId,
             'request' => $request,
         ]);

         $response = $next($request);

         $this->logger->info('Application responded.', [
            'request_id' => $request->requestId,
            'response'    => $response,
         ]);

         return $response;
    }
}