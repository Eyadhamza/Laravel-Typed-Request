<?php

namespace PiSpace\LaravelTypedRequest\Rules;
use Attribute;

#[Attribute]
class Exists extends Rule
{
    private string $table;
    private string $column;

    public function __construct(string $table, string $column = 'NULL')
    {
        parent::__construct();
        $this->table = $table;
        $this->column = $column;
    }

    public function rule(): \Illuminate\Validation\Rules\Exists
    {
        return \Illuminate\Validation\Rule::exists($this->table, $this->column);
    }
}
