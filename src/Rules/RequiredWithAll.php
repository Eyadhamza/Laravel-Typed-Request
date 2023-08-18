<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class RequiredWithAll extends RuleAttribute
{
    private array $fields;

    public function __construct(array $fields)
    {
        parent::__construct();
        $this->fields = $fields;
    }

    public function rule(): string
    {
        return "required_with_all:" . implode(',', $this->fields);
    }
}
