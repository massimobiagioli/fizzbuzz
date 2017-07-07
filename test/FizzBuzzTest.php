<?php

namespace AppTest;

/**
 * Test FizzBuzz Kata
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Controlla se la classe FizzBuzz esiste
     */
    public function testClassFizzBuzzExists()
    {
        $fizzBuzz = new \App\FizzBuzz();
        $this->assertNotNull($fizzBuzz);
    }
    
}
