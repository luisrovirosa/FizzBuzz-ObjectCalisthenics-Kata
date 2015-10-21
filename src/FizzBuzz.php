<?php

class FizzBuzz
{
    /** @var Rule[] */
    private $rules;

    /**
     * FizzBuzz constructor.
     */
    public function __construct()
    {

        $this->rules = [
            new FizzBuzzNumberRule(
                new FizzNumberRule(),
                new BuzzNumberRule()
            ),
            new FizzNumberRule(),
            new BuzzNumberRule(),
            new SameNumberRule()
        ];
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
            $answers[] = $this->generateAnswer($i);
        }

        return new Solution($answers);
    }

    /**
     * @param $i
     * @return Answer
     */
    protected function generateAnswer($i)
    {
        $fizzNumber = new FizzNumber($i);
        $rule = $this->selectRule($fizzNumber);

        return $rule->answer($fizzNumber);
    }

    private function selectRule(FizzNumber $fizzNumber)
    {
        $validRules = $this->validRules($fizzNumber);

        return array_shift($validRules);
    }

    /**
     * @param FizzNumber $fizzNumber
     * @return array
     */
    public function validRules(FizzNumber $fizzNumber)
    {
        return array_filter(
            $this->rules,
            function (Rule $rule) use ($fizzNumber) {
                return $rule->match($fizzNumber) === FizzBoolean::true();
            }
        );
    }
}