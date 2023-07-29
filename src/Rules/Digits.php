<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Digits extends Rule
{
    private int $digits;

    public function __construct(int $digits)
    {
        parent::__construct();
        $this->digits = $digits;
    }

    public function rule(): string
    {
        return "digits:{$this->digits}";
    }
}
