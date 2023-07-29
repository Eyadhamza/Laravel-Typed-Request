<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class ActiveURL extends Rule
{
    public function rule(): string
    {
        return 'active_url';
    }
}
