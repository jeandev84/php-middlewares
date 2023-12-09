<?php
declare(strict_types=1);


/**
 * Created by PhpStorm at 09.12.2023
 *
 * @Author
 *
 * @author Jean-Claude <jeanyao@ymail.com>
*/
class Author
{

    /**
     * @var string
     */
    private string $lastName;



    /**
     * @var string
     */
    private string $firstName;


    public function __construct(
        string $lastName,
        string $firstName
    )
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
    }




    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }


    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }




    /**
     * @return string
     */
    public function getFullName(): string
    {
        return "$this->firstName $this->lastName";
    }
}