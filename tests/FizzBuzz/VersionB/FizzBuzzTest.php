<?php

namespace GreenRooms\FizzBuzz\VersionB;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    private $fizzBuzz;

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
        $this->fizzBuzz->addRule(new FizzBuzzRule());
        $this->fizzBuzz->addRule(new BuzzRule());
        $this->fizzBuzz->addRule(new FizzRule());
    }

    public function testGenerate()
    {
        $this->assertEquals(
            [1, 2, 'Fizz', 4, 'Buzz','Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz'],
            $this->fizzBuzz->generateUpTo(15)
        );
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
            'three' => [3],
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
