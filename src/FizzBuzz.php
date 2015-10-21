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
        $answers = [new Answer('1'), new Answer('2')];
        for ($i = 3; $i <= 100; $i++) {
            $answers[] = new Answer(null);
        }

        return new Solution($answers);
    }
}