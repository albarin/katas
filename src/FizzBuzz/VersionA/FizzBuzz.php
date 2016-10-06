<?php

namespace GreenRooms\FizzBuzz\VersionA;

class FizzBuzz
{
    public function generateUpTo($limit)
    {
        return array_map(function ($i) {
            return $this->replace($i);
        }, range(1, $limit));
    }

    public function replace($number)
    {
        if ($this->isMultipleOfThreeAndFive($number)) {
            return 'FizzBuzz';
        }

        if ($this->isMultipleOfThree($number)) {
            return 'Fizz';
        }

        if ($this->isMultipleOfFive($number)) {
            return 'Buzz';
        }

        return $number;
    }

    private function isMultipleOfThree($number)
    {
        return $number % 3 == 0;
    }

    private function isMultipleOfFive($number)
    {
        return $number % 5 == 0;
    }

    private function isMultipleOfThreeAndFive($number)
    {
        return $this->isMultipleOfThree($number) &&
            $this->isMultipleOfFive($number);
    }
}