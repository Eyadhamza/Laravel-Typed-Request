<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class IPAddress extends Rule
{
    public function rule(): string
    {
        return 'ip';
    }
}
