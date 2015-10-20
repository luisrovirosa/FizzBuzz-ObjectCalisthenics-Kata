<?php

class Solution
{
    /**
     * Contains the answers of the solution.
     *
     * @var Answer[]
     */
    private $answers;

    /**
     * Solution constructor.
     *
     * @param Answer[] $answers The answers of the solution.
     */
    public function __construct($answers)
    {
        $this->answers = $answers;
    }

    /**
     * Get the answer of the number.
     *
     * @param int $number The number
     * @return Answer
     */
    public function answer($number)
    {
        return $this->answers[$number - 1];
    }
}