<?php

class Solution
{
    /**
     * @var Answer[]
     */
    private $answers;

    /**
     * Solution constructor.
     * @param Answer[] $answers
     */
    public function __construct($answers)
    {
        $this->answers = $answers;
    }

    /**
     * @param int $number
     * @return Answer
     */
    public function answer($number)
    {
        return $this->answers[$number - 1];
    }
}