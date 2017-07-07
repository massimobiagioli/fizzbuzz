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
        if ($number === 3) {
            return 'fizz';
        }
        return $number;
    }
}
