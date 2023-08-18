<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Timezone extends RuleAttribute
{
    public function rule(): string
    {
        return 'timezone';
    }
}
