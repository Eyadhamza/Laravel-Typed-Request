<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class ULID extends Rule
{
    public function rule(): string
    {
        return 'ulid';
    }
}
