<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class MissingWithAll extends RuleAttribute
{
    private array $fields;

    public function __construct(array $fields)
    {
        parent::__construct();
        $this->fields = $fields;
    }

    public function rule(): string
    {
        return "missing_with_all:" . implode(',', $this->fields);
    }
}
