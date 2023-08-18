<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Unique extends RuleAttribute
{
    private string $table;
    private string $column;

    public function __construct(string $table, string $column,)
    {
        parent::__construct();
        $this->table = $table;
        $this->column = $column;
    }

    public function rule(): \Illuminate\Validation\Rules\Unique
    {
        return \Illuminate\Validation\Rule::unique($this->table, $this->column);
    }
}
