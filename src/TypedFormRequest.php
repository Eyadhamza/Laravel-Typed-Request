<?php

namespace PiSpace\LaravelTypedRequest;

use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Foundation\Http\FormRequest;
use ReflectionClass;
use ReflectionProperty;

class TypedFormRequest extends FormRequest
{
    public function rules(): array
    {
        $properties = collect((new ReflectionClass($this))->getProperties(ReflectionProperty::IS_READONLY));

        return $properties->mapWithKeys(function (ReflectionProperty $property){
            $rules = collect($property->getAttributes())->map(fn($attribute) => $attribute->newInstance()->rule())->all();

            $this->initializeTypedProperty($property);

            return [
                $property->getName() => $rules
            ];
        })->all();
    }

    private function initializeTypedProperty(ReflectionProperty $property): void
    {
        $property->setValue($this, $this->input($property->getName()));
    }

}
