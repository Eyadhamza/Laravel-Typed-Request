<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Alpha extends RuleAttribute
{
    public function rule(): string
    {
        return 'alpha';
    }
}
