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
        // Considera la divisibilità per 3, 5 e 7
        if (($number % 3 === 0) && ($number % 5 === 0) && ($number % 7 === 0)) {
            return 'fizzbuzzpop';
        } else {
            return $this->processTwoConditions($number);
        }
    }
    
    /**
     * Process numero considerando la divisibilità per due numeri
     * @param int $number Numero da processare
     * @return string Numero processato secondo le regole del gioco
     */
    private function processTwoConditions($number)
    {
        if (($number % 3 === 0) && ($number % 7 === 0)) {
            return 'fizzpop';
        } elseif (($number % 5 === 0) && ($number % 7 === 0)) {
            return 'buzzpop';
        } elseif (($number % 3 === 0) && ($number % 5 === 0)) {
            return 'fizzbuzz';
        } else {
            return $this->processOneCondition($number);
        }
    }
    
    /**
     * Process numero considerando la divisibilità per un solo numero
     * @param int $number Numero da processare
     * @return string Numero processato secondo le regole del gioco
     */
    private function processOneCondition($number)
    {
        if ($number % 3 === 0) {
            return 'fizz';
        } elseif ($number % 5 === 0) {
            return 'buzz';
        } elseif ($number % 7 === 0) {
            return 'pop';
        } else {
            // In questo caso, ritorna il numero stesso
            return $number;
        }
    }
}
