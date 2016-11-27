<?php

namespace GreenRooms\RomanNumbers;

class RomanNumbersTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RomanNumbers
     */
    private $romanNumbers;

    public function setUp()
    {
        $this->romanNumbers = new RomanNumbers();
    }

    /**
     * @dataProvider basicNumbers
     */
    public function testBasicTranslation($number, $romanNumber)
    {
        $this->assertEquals($romanNumber, $this->romanNumbers->translate($number));
    }

    /**
     * @dataProvider complexNumbers
     */
    public function testComplexNumbers($number, $romanNumber)
    {
        $this->assertEquals($romanNumber, $this->romanNumbers->translate($number));
    }

    public function basicNumbers()
    {
        return [
            [1, 'I'],
            [4, 'IV'],
            [5, 'V'],
            [9, 'IX'],
            [10, 'X'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
        ];
    }

    public function complexNumbers()
    {
        return [
            [11, 'XI'],
            [20, 'XX'],
            [45, 'XLV'],
            [120, 'CXX'],
            [431, 'CDXXXI'],
            [1945, 'MCMXLV'],
            [2017, 'MMXVII'],
            [5000, 'MMMMM'],
            [10432, 'MMMMMMMMMMCDXXXII'],
        ];
    }
}
