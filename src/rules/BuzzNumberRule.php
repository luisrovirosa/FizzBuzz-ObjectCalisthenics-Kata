<?php

class BuzzNumberRule implements Rule
{
    /** @var FizzNumber */
    private $five;
    
    /** @var Answer */
    private $buzz;

    /**
     * BuzzNumberRule constructor.
     */
    public function __construct()
    {
        $this->five = new FizzNumber(5);
        $this->buzz = new Answer('Buzz');
    }

    /**
     * @param FizzNumber $number
     * @return FizzBoolean
     */
    public function match(FizzNumber $number)
    {
        return $number->modOf($this->five);
    }

    /**
     * @param FizzNumber $number
     * @return Answer
     */
    public function answer(FizzNumber $number)
    {
        return $this->buzz;
    }
}