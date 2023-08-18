<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Bail extends RuleAttribute
{

    public function rule(): string
    {
        return 'bail';
    }
}
