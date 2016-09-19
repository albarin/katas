<?php

namespace GreenRooms\PrimeFactors;

abstract class PrimeFactors
{
    /**
     * @param $number
     *
     * @return array
     */
    abstract function factorize($number);

    protected function isDivisible($dividend, $divisor)
    {
        return $dividend % $divisor == 0;
    }
}