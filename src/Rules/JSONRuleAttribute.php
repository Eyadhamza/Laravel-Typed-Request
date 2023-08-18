<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class JSONRuleAttribute extends RuleAttribute
{
    public function rule(): string
    {
        return 'json';
    }
}
