<?php

namespace AppTest;

/**
 * Test FizzBuzz Kata
 */
class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    private $fizzBuzz;
    
    
    protected function setUp() {
        $this->fizzBuzz = new \App\FizzBuzz();
    }
    
    /**
     * Controlla se la classe FizzBuzz esiste
     */
    public function testClassFizzBuzzExists()
    {
        $this->assertNotNull($this->fizzBuzz);
    }
    
    /**
     * Controlla che in corrispondenza del numero 1 esca '1'
     */
    public function testNumberOneIsNumberOne()
    {
        $number = 1;
        $this->assertEquals('1', $this->fizzBuzz->process($number));
    }
    
    /**
     * Controlla che in corrispondenza del numero 2 esca '2'
     */
    public function testNumberTwoIsNumberTwo()
    {
        $number = 2;
        $this->assertEquals('2', $this->fizzBuzz->process($number));
    }
    
    /**
     * Controlla che in corrispondenza del numero 3 esca 'fizz'
     */
    public function testNumberThreeIsFizz()
    {
        $number = 3;
        $this->assertEquals('fizz', $this->fizzBuzz->process($number));
    }
    
}
