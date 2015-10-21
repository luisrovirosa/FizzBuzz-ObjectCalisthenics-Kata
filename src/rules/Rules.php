<?php

class Rules
{
    /**
     * @var Rule[]
     */
    private $rules;

    /**
     * Rules constructor.
     * @param Rule[] $rules
     */
    public function __construct($rules)
    {
        $this->rules = $rules;
    }

    /**
     * Selects the fist valid rule.
     *
     * @param FizzNumber $fizzNumber
     * @return Rule
     */
    public function selectRule(FizzNumber $fizzNumber)
    {
        $validRules = $this->validRules($fizzNumber);

        return array_shift($validRules);
    }

    /**
     * @param FizzNumber $fizzNumber
     * @return Rule[]
     */
    private function validRules(FizzNumber $fizzNumber)
    {
        return array_filter(
            $this->rules,
            function (Rule $rule) use ($fizzNumber) {
                return $rule->match($fizzNumber) === FizzBoolean::true();
            }
        );
    }
}