<?php

namespace QA\Classes;

use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $author = new Author('Sebastian', 'Forsen', 'Fors');
        $question = new Question($author, 'What are frogs?');

        $this->assertSame("What are frogs? - Sebastian 'Forsen' Fors", $question->getResult());
    }
}
