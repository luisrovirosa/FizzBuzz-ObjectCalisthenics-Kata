<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function should_return_1_for_the_number_1()
    {
        $fizzBuzz = new FizzBuzz();
        $solution = $fizzBuzz->execute();

        $this->assertEquals(new Answer('1'), $solution->answer(1));
    }
}