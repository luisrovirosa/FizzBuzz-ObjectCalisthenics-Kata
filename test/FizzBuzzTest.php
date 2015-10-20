<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function should_return_1_for_the_number_1()
    {
        $this->assertExpectedAnswer('1', 1);
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
        $fizzBuzz = new FizzBuzz();
        $solution = $fizzBuzz->execute();

        return $solution->answer(new FizzNumber($number));
    }
}