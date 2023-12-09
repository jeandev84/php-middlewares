<?php
declare(strict_types=1);


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @MegaCar
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package ${NAMESPACE}
 */
final class MegaCar extends Car implements CarInterface
{

    public function startEngine(): void
    {
        echo "Машина поехала". PHP_EOL;
    }



    public function stopEngine(): void
    {
        echo "Машина остановилась". PHP_EOL;
    }
}