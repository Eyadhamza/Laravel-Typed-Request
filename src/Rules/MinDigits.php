<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class MinDigits extends Rule
{
    private int $value;

    public function __construct(int $value)
    {
        parent::__construct();
        $this->value = $value;
    }

    public function rule(): string
    {
        return "digits:{$this->value}";
    }
}
