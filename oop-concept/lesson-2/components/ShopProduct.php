<?php
declare(strict_types=1);


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @ShopProduct
 *
 * @author Jean-Claude <jeanyao@ymail.com>
*/
class ShopProduct
{
      /**
       * @var string
      */
      private string $title;


      /**
       * @var int
      */
      private int $price;



      private Author $author;


      /**
       * @param string $title
       *
       * @param int $price
       *
       * @param Author $author
      */
      public function __construct(
          string $title,
          int $price,
          Author $author
      )
      {
          $this->title = $title;
          $this->price = $price;
          $this->author = $author;

          echo $this->showInfo();
      }


      /**
       * @return string
      */
      public function showInfo(): string
      {
          return join(PHP_EOL, [
               "Автор: {$this->author->getFullName()}",
               "Название: {$this->title}",
               "Цена: {$this->price}"
          ]);
      }





      /**
       * @return string
      */
      public function __toString(): string
      {
          return $this->showInfo();
      }





      public function __destruct()
      {
           echo "$this->title был занесен в БД \n";
      }
}












