<?php
declare(strict_types=1);


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @DigitalProduct
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package ${NAMESPACE}
*/
class DigitalProduct extends ShopProduct
{
        private string $type;
        private int $size;


        /**
         * @param string $title
         * @param float $price
         * @param string $type
         * @param int $size
         * @param Author $author
       */
       public function __construct(
           string $title,
           float $price,
           string $type,
           int $size,
           Author $author
       )
       {
           parent::__construct($title, $price, $author);
           $this->type = $type;
           $this->size = $size;
       }



       public function getInfo(): string
       {
           $info = parent::getInfo();
           return join(PHP_EOL, [
              $info,
              $this->type,
              $this->size
           ]);
       }
}