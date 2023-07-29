<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Bail extends Rule
{

    public function rule(): string
    {
        return 'bail';
    }
}
