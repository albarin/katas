<?php

namespace GreenRooms\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    private $fizzBuzz;

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testGenerate()
    {
        $this->assertEquals(
            [1, 2, 'Fizz', 4, 'Buzz','Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz'],
            $this->fizzBuzz->generateUpTo(15)
        );
    }

    public function testOneReturnsOne()
    {
        $this->assertEquals(1, $this->fizzBuzz->replace(1));
    }

    public function testThreeReturnsFizz()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->replace(3));
    }

    public function testFiveReturnsBuzz()
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->replace(5));
    }

    /**
     * @dataProvider multiplesOfThree
     */
    public function testThreeMultiplesReturnFizz($number)
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->replace($number));
    }

    /**
     * @dataProvider multiplesOfFive
     */
    public function testFiveMultiplesReturnFizz($number)
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->replace($number));
    }

    /**
     * @dataProvider multiplesOfThreeAndFive
     */
    public function testThreeAndFiveMultiplesReturnFizzBuzz($number)
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->replace($number));
    }

    public function multiplesOfThree()
    {
        return [
            'six' => [6],
            'nine' => [9],
            'twelve' => [12],
        ];
    }

    public function multiplesOfFive()
    {
        return [
            'five' => [5],
            'ten' => [10],
            'twenty' => [20],
        ];
    }

    public function multiplesOfThreeAndFive()
    {
        return [
            'fifteen' => [15],
            'thirty' => [30],
            'sixty' => [60],
        ];
    }
}
