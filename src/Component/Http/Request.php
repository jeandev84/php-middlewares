<?php
declare(strict_types=1);

namespace Framework\Component\Http;


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Request
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package Framework\Component\Http
 */
final class Request
{
     public function __construct(
         public readonly string $requestId,
         public readonly string $title
     )
     {
     }

     public function getContent(): string
     {
          return json_encode($_GET);
     }
}