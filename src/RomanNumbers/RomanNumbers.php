<?php

namespace GreenRooms\RomanNumbers;

class RomanNumbers
{
    private $lookUpTable = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function translate($number)
    {
        $romanNumber = '';

        while ($number > 0) {
            foreach($this->lookUpTable as $lookUpNumber => $lookUpRomanNumber) {
                if ($lookUpNumber <= $number) {
                    $romanNumber .= $lookUpRomanNumber;
                    $number -= $lookUpNumber;

                    break;
                }
            }

        }

        return $romanNumber;
    }
}