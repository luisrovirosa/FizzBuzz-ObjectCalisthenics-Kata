<?php

class SameNumberRule implements Rule
{
    /**
     * @param FizzNumber $number
     * @return FizzBoolean
     */
    public function match(FizzNumber $number)
    {
        return FizzBoolean::true();
    }

    /**
     * @param FizzNumber $number
     * @return Answer
     */
    public function answer(FizzNumber $number)
    {
        return new Answer($number->toInt());
    }
}