<?php
declare(strict_types=1);


namespace QA\Classes;


interface AuthorInterface
{
    public function getFirstName(): string;

    public function getNickName(): string;

    public function getLastName(): string;
}