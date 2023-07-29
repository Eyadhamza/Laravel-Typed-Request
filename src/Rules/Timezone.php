<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Timezone extends Rule
{
    public function rule(): string
    {
        return 'timezone';
    }
}
