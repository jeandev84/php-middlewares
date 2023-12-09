<?php
declare(strict_types=1);


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Saller
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package ${NAMESPACE}
 */
class Saller
{

     /**
      * @param ShopProduct $product
      *
      * @param float $sale
      *
      * @return float
     */
     public function sale(ShopProduct $product, float  $sale): float
     {
          $price     = $product->getPrice();
          return $price - ($price * $sale);
     }
}