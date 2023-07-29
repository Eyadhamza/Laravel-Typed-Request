<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class Accepted extends Rule
{
    public function rule(): string
    {
        return 'accepted';
    }
}
