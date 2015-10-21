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
        $answers = [];
        for ($i = 1; $i <= 100; $i++) {
            if ($i == 3) {
                $answers[] = new Answer('Fizz');
            } else {
                $answers[] = new Answer($i);
            }
        }

        return new Solution($answers);
    }
}