<?php

namespace GreenRooms\FizzBuzz\VersionB;

class BuzzRule implements Rule
{
    /**
     * {@inheritdoc}
     */
    public function check($number)
    {
        return $number % 5 == 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getWord()
    {
        return 'Buzz';
    }
}