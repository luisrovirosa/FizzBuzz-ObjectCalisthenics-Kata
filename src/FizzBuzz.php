<?php

class FizzBuzz
{
    /** @var Rules */
    private $rules;

    /**
     * FizzBuzz constructor.
     * @param Rules $rules
     */
    public function __construct(Rules $rules)
    {
        $this->rules = $rules;
    }

    /**
     * Retrieve the first 100 values of FizzBuzz.
     *
     * @return Solution
     */
    public function execute()
    {
        $answers = [];
        for ($i = 1; $i <= 100; $i++) {
            $answers[] = $this->generateAnswer(new FizzNumber($i));
        }

        return new Solution($answers);
    }

    /**
     * @param FizzNumber $fizzNumber
     * @return Answer
     */
    private function generateAnswer(FizzNumber $fizzNumber)
    {
        $rule = $this->rules->selectRule($fizzNumber);

        return $rule->answer($fizzNumber);
    }

}