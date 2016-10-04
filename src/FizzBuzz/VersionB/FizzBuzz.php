<?php

namespace GreenRooms\FizzBuzz\VersionB;

class FizzBuzz
{
    /**
     * @var Rule[]
     */
    private $rules;

    public function generateUpTo($limit)
    {
        return array_map(function ($i) {
            return $this->replace($i);
        }, range(1, $limit));
    }

    /**
     * @param int $number
     *
     * @return string
     */
    public function replace($number)
    {
        foreach ($this->rules as $check) {
            if ($check->check($number)) {
                return $check->getWord();
            }
        }

        return $number;
    }

    /**
     * @param Rule $rule
     */
    public function addRule(Rule $rule)
    {
        $this->rules[] = $rule;
    }
}