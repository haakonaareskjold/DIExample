<?php

namespace QA\Classes;


/**
 * Class Question
 * @package QA\Classes
 * @author Haakon Aareskjold <aareskjold.haakon@gmail.com>
 * @link https://github.com/haakonaareskjold/DIExample
 */
class Question
{
    /**
     * @var Author
     */
    private Author $author;

    /**
     * @var string
     */
    private string $question;


    /**
     * Question constructor.
     * @param Author $author
     * @param string $question
     */
    public function __construct(Author $author, string $question)
    {
        $this->author = $author;
        $this->question = $question;
    }


    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return sprintf(
            "%s '%s' %s",
            $this->author->getFirstName(),
            $this->author->getNickName(),
            $this->author->getLastName()
        );
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return sprintf(
            "%s - %s",
            $this->getQuestion(),
            $this->getAuthor(),
        );
    }
}
