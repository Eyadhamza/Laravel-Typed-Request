<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class DigitsBetween extends Rule
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
        return "digits_between:{$this->min},{$this->max}";
    }
}
