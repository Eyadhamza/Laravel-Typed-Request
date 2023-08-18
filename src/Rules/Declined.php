<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Declined extends RuleAttribute
{
    public function rule(): string
    {
        return 'declined';
    }
}
