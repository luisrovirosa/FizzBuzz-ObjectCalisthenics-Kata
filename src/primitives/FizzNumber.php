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

    /**
     * @return int
     */
    public function toInt()
    {
        return $this->value;
    }

    /**
     * @param FizzNumber $number
     * @return FizzBoolean
     */
    public function modOf(FizzNumber $number)
    {
        $isMod = $this->value % $number->value == 0;

        return FizzBoolean::fromBool($isMod);
    }

}