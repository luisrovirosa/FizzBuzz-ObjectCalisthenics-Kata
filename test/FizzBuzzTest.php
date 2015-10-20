<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function should_return_1_for_the_number_1()
    {
        $this->assertEquals(new Answer('1'), $this->answerOf(1));
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