<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Exclude extends Rule
{
    private array $values;

    public function __construct(array $values)
    {
        parent::__construct();
        $this->values = $values;
    }

    public function rule(): \Illuminate\Validation\Rules\NotIn
    {
        return \Illuminate\Validation\Rule::notIn($this->values);
    }
}
