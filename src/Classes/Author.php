<?php

namespace QA\Classes;

/**
 * Class Author
 * @package App\Classes
 */
class Author
{
    /**
     * @var string
     */
    private string $firstName;
    /**
     * @var string
     */
    private string $lastName;
    /**
     * @var string
     */
    private string $nickName;

    /**
     * Author constructor.
     * @param string $firstName
     * @param string $nickName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $nickName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->nickName = $nickName;
        $this->lastName = $lastName;
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
    public function getNickName(): string
    {
        return $this->nickName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
