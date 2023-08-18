<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class RequiredWithout extends RuleAttribute
{
    private array $fields;

    public function __construct(array $fields)
    {
        parent::__construct();
        $this->fields = $fields;
    }

    public function rule(): string
    {
        return "required_without:" . implode(',', $this->fields);
    }
}
