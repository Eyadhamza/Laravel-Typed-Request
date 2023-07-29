<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Enum extends Rule
{
    private array $values;

    public function __construct(array $values)
    {
        parent::__construct();
        $this->values = $values;
    }

    public function rule(): \Illuminate\Validation\Rules\In
    {
        return \Illuminate\Validation\Rule::in($this->values);
    }

}
