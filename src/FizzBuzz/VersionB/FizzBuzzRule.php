<?php

namespace GreenRooms\FizzBuzz\VersionB;

class FizzBuzzRule implements Rule
{
    /**
     * {@inheritdoc}
     */
    public function check($number)
    {
        return $number % 15 == 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getWord()
    {
        return 'FizzBuzz';
    }
}