<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Between extends RuleAttribute
{
    private int $min;
    private int $max;

    public function __construct(int $min, int $max)
    {
        parent::__construct();
        $this->min = $min;
        $this->max = $max;
    }

    public function rule(): string
    {
        return "between:{$this->min},{$this->max}";
    }
}
