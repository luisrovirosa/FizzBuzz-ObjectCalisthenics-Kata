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
            $answers[] = $this->generateAnswer($i);
        }

        return new Solution($answers);
    }

    /**
     * @param $i
     * @return Answer
     */
    protected function generateAnswer($i)
    {
        if ($i == 3) {
            return new Answer('Fizz');
        } else {
            return new Answer($i);
        }
    }
}