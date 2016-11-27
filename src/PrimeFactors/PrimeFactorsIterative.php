<?php

namespace GreenRooms\PrimeFactors;

class PrimeFactorsIterative extends PrimeFactors
{
    /**
     * {@inheritdoc}
     */
    public function factorize($number)
    {
        $factors = [];
        $factor = 2;

        while ($number > 1) {
            while($this->isDivisible($number, $factor)) {
                $factors[] = $factor;

                $number = $number / $factor;
            }

            $factor++;
        }

        return $factors;
    }
}