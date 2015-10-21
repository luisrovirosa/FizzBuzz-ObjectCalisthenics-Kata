<?php

class FizzNumberRule implements Rule
{

    /**
     * @param FizzNumber $number
     * @return FizzBoolean
     */
    public function match(FizzNumber $number)
    {
        $match = $number == new FizzNumber(3);

        return FizzBoolean::fromBool($match);
    }

    /**
     * @param FizzNumber $number
     * @return Answer
     */
    public function answer(FizzNumber $number)
    {
        return new Answer('Fizz');
    }
}