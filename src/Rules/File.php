<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class File extends RuleAttribute
{
    public function rule(): string
    {
        return 'file';
    }
}
