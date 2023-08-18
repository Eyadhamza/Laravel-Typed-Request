<?php

namespace PiSpace\LaravelTypedRequest\Tests\Requests;

use PiSpace\LaravelTypedRequest\Rules\Date;
use PiSpace\LaravelTypedRequest\Rules\MaxLength;
use PiSpace\LaravelTypedRequest\Rules\Nullable;
use PiSpace\LaravelTypedRequest\Rules\Required;
use PiSpace\LaravelTypedRequest\Rules\RequiredIfPatch;
use PiSpace\LaravelTypedRequest\Rules\RuleAttribute;
use PiSpace\LaravelTypedRequest\Rules\StringValue;
use PiSpace\LaravelTypedRequest\TypedFormRequest;

class ArticleRequest extends TypedFormRequest
{
    #[Required, StringValue, MaxLength(255)]
    public readonly ?string $title;
    #[Required, StringValue, MaxLength(255)]
    public readonly ?string $body;
    #[Nullable, Date, RequiredIfPatch]
    public readonly ?string $published_at;
}
