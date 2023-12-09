<?php
declare(strict_types=1);

namespace Framework\Component\Http;


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Response
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package Framework\Component\Http
 */
final class Response
{
    public function __construct(
        public string $body,
        public readonly Status $status
    )
    {
    }


    public function getBody(): string
    {
        return $this->body;
    }


    public function __toString(): string
    {
        return $this->getBody();
    }
}