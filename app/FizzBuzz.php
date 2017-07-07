<?php

namespace App;

/**
 * The FizzBuzz Kata
 */
class FizzBuzz
{
    /**
     * Processa numero
     * @param int $number Numero da processare
     * @return string Numero processato secondo le regole del gioco
     */
    public function process($number)
    {
        if (($number % 3 === 0) && ($number % 5 === 0)) {
            return 'fizzbuzz';
        } else if ($number % 3 === 0) {
            return 'fizz';
        } else if ($number % 5 === 0) {
            return 'buzz';
        } else {
            return $number;
        }
    }
}
