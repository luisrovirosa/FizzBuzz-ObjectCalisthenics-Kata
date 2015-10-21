<?php

class FizzNumberRule implements Rule
{

    /**
     * @param FizzNumber $number
     * @return FizzBoolean
     */
    public function match(FizzNumber $number)
    {
        return $number->modOf(new FizzNumber(3));
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