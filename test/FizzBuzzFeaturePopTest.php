<?php

namespace AppTest;

/**
 * Test FizzBuzz Kata
 */
class FizzBuzzFeaturePopTest extends \PHPUnit_Framework_TestCase
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
     * Controlla che in corrispondenza di un numero multiplo di 7 esca 'pop'
     */
    public function testNumberMultipleOfSevenIsPop()
    {
        $number = 7;
        $this->assertEquals('pop', $this->fizzBuzz->process($number));
    }
    
    /**
     * Controlla che in corrispondenza di un numero multiplo di 3 e di 7 esca 'fizzpop'
     */
    public function testNumberMultipleOfThreeAndSevenIsFizzPop()
    {
        $number = 21;
        $this->assertEquals('fizzpop', $this->fizzBuzz->process($number));
    }
    
    /**
     * Controlla che in corrispondenza di un numero multiplo di 5 e di 7 esca 'buzzpop'
     */
    public function testNumberMultipleOfFiveAndSevenIsBuzzPop()
    {
        $number = 35;
        $this->assertEquals('buzzpop', $this->fizzBuzz->process($number));
    }
    
    /**
     * Controlla che in corrispondenza di un numero multiplo di 3, 5 e 7 esca 'fizzbuzzpop'
     */
    public function testNumberMultipleOfThreeAndFiveAndSevenIsFizzBuzzPop()
    {
        $number = 105;
        $this->assertEquals('fizzbuzzpop', $this->fizzBuzz->process($number));
    }
}
