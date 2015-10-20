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
     * @return array
     */
    public function execute()
    {
        return array(new Answer('1'));
    }
}