<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Declined extends Rule
{
    public function rule(): string
    {
        return 'declined';
    }
}
