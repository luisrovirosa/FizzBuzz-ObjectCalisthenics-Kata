<?php

class FizzBuzzNumberRule implements Rule
{
    /**
     * @var FizzNumberRule
     */
    private $fizzRule;
    /**
     * @var BuzzNumberRule
     */
    private $buzzRule;

    /**
     * FizzBuzzNumberRule constructor.
     *
     * @param FizzNumberRule $fizzRule
     * @param BuzzNumberRule $buzzRule
     */
    public function __construct(FizzNumberRule $fizzRule, BuzzNumberRule $buzzRule)
    {
        $this->fizzRule = $fizzRule;
        $this->buzzRule = $buzzRule;
    }

    /**
     * @param FizzNumber $number
     * @return FizzBoolean
     */
    public function match(FizzNumber $number)
    {
        $isFizz = $this->fizzRule->match($number);
        $isBuzz = $this->buzzRule->match($number);

        return $isFizz->logicalAnd($isBuzz);
    }

    /**
     * @param FizzNumber $number
     * @return Answer
     */
    public function answer(FizzNumber $number)
    {
        return new Answer('FizzBuzz');
    }
}