<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Accepted extends RuleAttribute
{
    public function rule(): string
    {
        return 'accepted';
    }
}
