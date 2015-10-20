<?php

class FizzNumber
{
    /**
     * @var int
     */
    private $value;

    /**
     * Number constructor.
     * @param int $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function toInt(){
        return $this->value;
    }


}