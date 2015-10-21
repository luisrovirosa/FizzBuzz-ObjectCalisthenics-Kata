<?php

class FizzBoolean
{
    /**
     * @var bool
     */
    private $value;

    /** @var FizzBoolean[] */
    private static $values = null;

    /**
     * FizzBoolean constructor.
     * @param bool $value
     */
    private function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return FizzBoolean
     */
    public static function true()
    {
        return self::fromBool(true);
    }

    /**
     * @return FizzBoolean
     */
    public static function false()
    {
        return self::fromBool(false);
    }

    /**
     * @param bool $boolean
     * @return FizzBoolean
     */
    public static function fromBool($boolean)
    {
        self::initialize();

        return self::$values[$boolean];
    }

    /**
     * @param FizzBoolean $boolean
     * @return FizzBoolean
     */
    public function logicalAnd(FizzBoolean $boolean)
    {
        return static::fromBool($this->value && $boolean->value);
    }

    protected static function initialize()
    {
        if (null == self::$values) {
            self::$values = [
                true => new FizzBoolean(true),
                false => new FizzBoolean(false)
            ];
        }
    }

}