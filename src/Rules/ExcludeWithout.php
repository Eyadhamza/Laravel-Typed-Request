<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class ExcludeWithout extends RuleAttribute
{
    private array $fields;

    public function __construct(array $fields)
    {
        parent::__construct();
        $this->fields = $fields;
    }
    public function rule(): string
    {
        return "exclude_without:" . implode(',', $this->fields);
    }
}
