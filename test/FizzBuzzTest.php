<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function should_return_1_for_the_number_1()
    {
        $this->assertExpectedAnswer('1', 1);
    }

    /** @test */
    public function should_return_2_for_the_number_2()
    {
        $this->assertExpectedAnswer('2', 2);
    }

    /** @test */
    public function should_return_Fizz_for_the_number_3()
    {
        $this->assertExpectedAnswer('Fizz', 3);
    }

    /** @test */
    public function should_return_Fizz_for_the_number_6()
    {
        $this->assertExpectedAnswer('Fizz', 6);
    }

    /** @test */
    public function should_return_Buzz_for_the_number_5()
    {
        $this->assertExpectedAnswer('Buzz', 5);
    }

    /** @test */
    public function should_return_FizzBuzz_for_the_number_15()
    {
        $this->assertExpectedAnswer('FizzBuzz', 15);
    }

    /** @test */
    public function should_contains_100_values()
    {
        $this->assertEquals(new FizzNumber(100), $this->solution()->count());
    }

    /**
     * @param $expected
     * @param $number
     */
    protected function assertExpectedAnswer($expected, $number)
    {
        $this->assertEquals(new Answer($expected), $this->answerOf($number));
    }

    /**
     * @param $number
     * @return Answer
     */
    protected function answerOf($number)
    {
        return $this->solution()->answer(new FizzNumber($number));
    }

    /**
     * @return \Solution
     */
    protected function solution()
    {
        $fizzBuzz = new FizzBuzz();

        return $fizzBuzz->execute();
    }
}