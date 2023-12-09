<?php
declare(strict_types=1);

namespace Framework\Component\Http;


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Status
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package Framework\Component\Http
 */
enum Status: string
{
    case OK = 'OK';
    case BAD_REQUEST = 'BAD REQUEST';
}