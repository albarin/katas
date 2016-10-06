<?php

namespace GreenRooms\FizzBuzz\VersionB;

interface Rule
{
    /**
     * @param $number
     *
     * @return boolean
     */
    public function check($number);

    /**
     * @return string
     */
    public function getWord();
}