<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Confirmed extends RuleAttribute
{
    public function rule(): string
    {
        return 'confirmed';
    }
}
