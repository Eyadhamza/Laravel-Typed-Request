<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class NotIn extends RuleAttribute
{
    private array $values;

    public function __construct(array $values)
    {
        parent::__construct();
        $this->values = $values;
    }

    public function rule(): string
    {
        return "not_in:" . implode(',', $this->values);
    }
}
