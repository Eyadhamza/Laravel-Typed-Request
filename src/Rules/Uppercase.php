<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Uppercase extends RuleAttribute
{
    public function rule(): string
    {
        return 'uppercase';
    }
}
