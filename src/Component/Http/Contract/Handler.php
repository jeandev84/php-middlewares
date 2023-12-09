<?php
declare(strict_types=1);

namespace Framework\Component\Http\Contract;


use Framework\Component\Http\Request;
use Framework\Component\Http\Response;

/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Handler this is a request handler
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package Framework\Component\Http\Contract
 */
interface Handler
{
     public function handle(Request $request): Response;
}