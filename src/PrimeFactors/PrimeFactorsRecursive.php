<?php

namespace GreenRooms\PrimeFactors;

class PrimeFactorsRecursive extends PrimeFactors
{
    /**
     * {@inheritdoc}
     */
    public function factorize($number)
    {
        return $this->primeFactors($number, 2);
    }

    private function primeFactors($number, $factor)
    {
        $factors = [];

        if ($number === $factor) {
            $factors[] = $factor;

            return $factors;
        }
        elseif ($this->isDivisible($number, $factor)) {
            $number = $number / $factor;

            $factors[] = $factor;

            return array_merge($factors, $this->primeFactors($number, $factor));
        }
        else {
            return array_merge($factors, $this->primeFactors($number, $factor+1));
        }
    }
}