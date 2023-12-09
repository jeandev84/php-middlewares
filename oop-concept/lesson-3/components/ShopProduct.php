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
       * @var float
      */
      private float $price;


      /**
       * @var Author
      */
      private Author $author;


      /**
       * @param string $title
       *
       * @param float $price
       *
       * @param Author $author
      */
      public function __construct(
          string $title,
          float $price,
          Author $author
      )
      {
          $this->title = $title;
          $this->price = $price;
          $this->author = $author;
      }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @param float $price
     *
     * @return $this
    */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }




    /**
     * @param string $title
     *
     * @return $this
    */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }



    /**
     * @param Author $author
     *
     * @return $this
    */
    public function setAuthor(Author $author): self
    {
        $this->author = $author;

        return $this;
    }




    /**
     * @return float
    */
    public function getPrice(): float
    {
        return $this->price;
    }




     /**
      * @return Author
     */
     public function getAuthor(): Author
     {
         return $this->author;
     }
}










