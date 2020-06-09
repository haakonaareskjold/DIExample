<?php
declare(strict_types=1);


namespace QA\Classes;


/**
 * Interface AuthorInterface
 * @package QA\Classes
 */
interface AuthorInterface
{
    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @return string
     */
    public function getNickName(): string;

    /**
     * @return string
     */
    public function getLastName(): string;
}