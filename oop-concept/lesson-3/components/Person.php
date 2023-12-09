<?php
declare(strict_types=1);


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Person
 *
 * @author Jean-Claude <jeanyao@ymail.com>
*/
class Person
{
     /**
      * @var string
     */
     private string $name;


     /**
      * @var int
     */
     private int $age;


     /**
      * @var string
     */
     private string $job;


     public function __construct(
         string $name,
         int $age,
         string $job
     )
     {
         $this->name = $name;
         $this->age  = $age;
         $this->job  = $job;
     }


     public function greeting(): string
     {
          return "Hello, $this->name";
     }
}

$eric = new Person("Эрик", 25, "web-developer");
echo $eric->greeting(), "\n";
