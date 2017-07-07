<?php

namespace AppTest;

class FizzBuzzTest extends PHPUnit_Framework_TestCase 
{

    /**
     * Controlla se la classe FizzBuzz esiste
     */
    public function testClassFizzBuzzExists() 
    {        
        $fb = new App\FizzBuzz();
        $this->assertNotNull($fb);
    }
        
}
