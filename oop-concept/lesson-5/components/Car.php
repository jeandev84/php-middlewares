<?php
declare(strict_types=1);


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Car
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package ${NAMESPACE}
 */
abstract class Car
{
      private int $tire = 0;

      public function startEngine(): void
      {
          echo "Двигитель завелся". PHP_EOL;
      }


      /**
       * @return int
     */
     public function getTire(): int
     {
        return $this->tire;
     }


     final public function dontSureThisCorrectGood(): string
     {
          return "?";
     }



      abstract public function stopEngine();
}