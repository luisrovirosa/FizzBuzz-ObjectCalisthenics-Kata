<?php

interface Rule
{
    /**
     * @param FizzNumber $number
     * @return FizzBoolean
     */
    public function match(FizzNumber $number);

    /**
     * @param FizzNumber $number
     * @return Answer
     */
    public function answer(FizzNumber $number);
}