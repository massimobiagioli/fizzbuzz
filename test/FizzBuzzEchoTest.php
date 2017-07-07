<?php

namespace AppTest;

/**
 * Test FizzBuzz Kata
 */
class FizzBuzzEchoTest extends \PHPUnit_Framework_TestCase
{
    private $fizzBuzz;
    
    /**
     * Setup Test
     */
    protected function setUp()
    {
        $this->fizzBuzz = new \App\FizzBuzz();
    }
        
    /**
     * Simula gioco fizzbuzz con una sequenza di numeri da 1 a 500
     */
    public function testPrintSequence()
    {
        for ($i = 1; $i <= 500; $i++) {
            echo $this->fizzBuzz->process($i);
            if ($i < 500) {
                echo ' - ';
            }
        }
    }
}
