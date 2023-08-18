<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Prohibits extends RuleAttribute
{
    private array $fields;

    public function __construct(array $fields)
    {
        parent::__construct();
        $this->fields = $fields;
    }

    public function rule(): string
    {
        return "prohibits:" . implode(',', $this->fields);
    }
}
