<?php

use Illuminate\Validation\ValidationException;
use PiSpace\LaravelTypedRequest\Tests\Requests\ArticleRequest;

it('validate with typed form request', function () {
    $request = new ArticleRequest([
        'title' => 'Hello World',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'published_at' => '2021-01-01',
    ]);

    $request->validate($request->rules());

    expect($request->title)->toBe('Hello World')
        ->and($request->body)->toBe('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
        ->and($request->published_at)->toBe('2021-01-01');

});

it('fails to validate with typed form request', function () {
    $this->expectException(ValidationException::class);
    $request = new ArticleRequest([
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'published_at' => '2021-01-01',
    ]);

    $request->validate($request->rules());
});

it('validate with custom rules', function () {
    request()->setMethod('PATCH');
    $request = new ArticleRequest([
        'title' => 'Hello World',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    ]);

    $this->expectException(ValidationException::class);
    $request->validate($request->rules());

});

