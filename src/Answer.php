<?php

class Answer
{
    /**
     * @var string
     */
    private $answer;

    /**
     * Answer constructor.
     *
     * @param string $answer
     */
    public function __construct($answer)
    {
        $this->answer = $answer;
    }
}