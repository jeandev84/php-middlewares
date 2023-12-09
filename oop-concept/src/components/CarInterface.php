<?php
declare(strict_types=1);


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @CarInterface
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package ${NAMESPACE}
 */
interface CarInterface
{
    public function startEngine(): void;

    public function stopEngine(): void;
}