<?php

namespace AppTest;

/**
 * Test FizzBuzz Kata
 */
class FizzBuzzBaseTest extends \PHPUnit_Framework_TestCase
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

    /**
     * Controlla che in corrispondenza del numero 5 esca 'buzz'
     */
    public function testNumberFiveIsBuzz()
    {
        $number = 5;
        $this->assertEquals('buzz', $this->fizzBuzz->process($number));
    }
    
    /**
     * Controlla che in corrispondenza di un numero multiplo di 3 esca 'fizz'
     */
    public function testNumberMultipleOfThreeIsFizz()
    {
        $number = 6;
        $this->assertEquals('fizz', $this->fizzBuzz->process($number));
    }
    
    /**
     * Controlla che in corrispondenza di un numero multiplo di 5 esca 'buzz'
     */
    public function testNumberMultipleOfFiveIsBuzz()
    {
        $number = 10;
        $this->assertEquals('buzz', $this->fizzBuzz->process($number));
    }
    
    /**
     * Controlla che in corrispondenza di un numero multiplo di 3 e di 5 esca 'fizzbuzz'
     */
    public function testNumberMultipleOfThreeAndFiveIsFizzBuzz()
    {
        $number = 15;
        $this->assertEquals('fizzbuzz', $this->fizzBuzz->process($number));
    }
}
