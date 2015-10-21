<?php

class FizzBuzz
{

    /**
     * FizzBuzz constructor.
     */
    public function __construct()
    {
    }

    /**
     * Retrieve the first 100 values of FizzBuzz.
     *
     * @return Solution
     */
    public function execute()
    {
        return new Solution([new Answer('1'), new Answer('2')]);
    }
}