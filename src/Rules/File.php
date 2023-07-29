<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class File extends Rule
{
    public function rule(): string
    {
        return 'file';
    }
}
