<?php

namespace GreenRooms\PrimeFactors;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PrimeFactors
     */
    private $primeFactorsIterative;

    /**
     * @var PrimeFactors
     */
    private $primeFactorsRecursive;

    public function setUp()
    {
        $this->primeFactorsIterative = new PrimeFactorsIterative();
        $this->primeFactorsRecursive = new PrimeFactorsRecursive();
    }

    /**
     * @dataProvider numbers
     */
    public function testFactorizeIterative($number, $factors)
    {
        $this->assertEquals(
            $factors,
            $this->primeFactorsIterative->factorize($number)
        );
    }

    /**
     * @dataProvider numbers
     */
    public function testFactorizeRecursive($number, $factors)
    {
        $this->assertEquals(
            $factors,
            $this->primeFactorsRecursive->factorize($number)
        );
    }

    public function numbers()
    {
        return [
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [10, [2, 5]],
            [50, [2, 5, 5]],
            [232, [2, 2, 2, 29]],
            [1247, [29, 43]],
        ];
    }
}
