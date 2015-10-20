<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function should_return_1_for_the_number_1()
    {
        $fizzBuzz = new FizzBuzz();
        $numbers = $fizzBuzz->execute();

        $response = new Answer('1');
        $this->assertEquals($response, $numbers[0]);
    }
}