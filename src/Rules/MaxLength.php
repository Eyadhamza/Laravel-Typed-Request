<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class MaxLength extends RuleAttribute
{
    private int $length;

    public function __construct(int $length)
    {
        parent::__construct();

        $this->length = $length;
    }

    public function rule(): string
    {
        return "max:{$this->length}";
    }
}
