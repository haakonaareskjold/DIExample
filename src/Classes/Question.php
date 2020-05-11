<?php


namespace App\Classes;


// With dependency injection
class Question
{
    private Author $author;
    private string $question;

    public function __construct($question, Author $author) {
        $this->author = $author;
        $this->question = $question;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getQuestion() {
        return $this->question;
    }
}