<?php

class FizzNumberRule implements Rule
{
    /** @var FizzNumber */
    private $three;
    
    /** @var Answer */
    private $answer;

    /**
     * FizzNumberRule constructor.
     */
    public function __construct()
    {
        $this->three = new FizzNumber(3);
        $this->answer = new Answer('Fizz');
    }

    /**
     * @param FizzNumber $number
     * @return FizzBoolean
     */
    public function match(FizzNumber $number)
    {
        return $number->modOf($this->three);
    }

    /**
     * @param FizzNumber $number
     * @return Answer
     */
    public function answer(FizzNumber $number)
    {
        return $this->answer;
    }
}