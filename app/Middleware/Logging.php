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

/*
[2023-12-09T11:56:03.197484+03:00] main.INFO: Request. {"request_id":"65742ba3302d1","request":{"Framework\\Component\\Http\\Request":{"requestId":"65742ba3302d1"}}} []
[2023-12-09T11:56:03.198186+03:00] main.INFO: Application responded. {"request_id":"65742ba3302d1","response":{"Framework\\Component\\Http\\Response":{"status":"OK","body":"[]"}}} []
*/