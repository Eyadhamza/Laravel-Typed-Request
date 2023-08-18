<?php

namespace PiSpace\LaravelTypedRequest\Rules;

use Attribute;

#[Attribute]
class RequiredArrayKeys extends RuleAttribute
{
    private array $keys;

    public function __construct(array $keys)
    {
        parent::__construct();
        $this->keys = $keys;
    }

    public function rule(): string
    {
        return "required_array_keys:" . implode(',', $this->keys);
    }
}
