<?php

use App\Classes\Author;
use App\Classes\Question;

require_once __DIR__. "/../src/bootstrap.php";

$question = new Question('Is this dependency injection?',  new Author('John ', 'Smith'));
echo $question->getAuthor()->getFirstName();
echo $question->getAuthor()->getLastName();
