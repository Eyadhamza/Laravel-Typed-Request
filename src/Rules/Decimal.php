<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Decimal extends Rule
{
    private int $places;

    public function __construct(int $places)
    {
        parent::__construct();
        $this->places = $places;
    }

    public function rule(): string
    {
        return "numeric|regex:/^-?[0-9]+(\.[0-9]{1,{$this->places}})?$/";
    }
}
