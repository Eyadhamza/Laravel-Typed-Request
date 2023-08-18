<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Missing extends RuleAttribute
{

    public function rule(): string
    {
        return 'missing';
    }
}
