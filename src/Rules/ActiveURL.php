<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class ActiveURL extends RuleAttribute
{
    public function rule(): string
    {
        return 'active_url';
    }
}
