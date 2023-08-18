<?php

it('can make a typed request', function () {
    $this->artisan('make:typed-request', [
        'name' => 'TestRequest',
    ])->assertExitCode(0);

    $this->assertFileExists(app_path('Http/Requests/TestRequest.php'));
});
