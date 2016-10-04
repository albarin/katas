<?php

namespace GreenRooms\FizzBuzz\VersionB;

class FizzRule implements Rule
{
    /**
     * {@inheritdoc}
     */
    public function check($number)
    {
        return $number % 3 == 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getWord()
    {
        return 'Fizz';
    }
}