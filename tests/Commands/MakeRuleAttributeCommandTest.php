<?php

it('makes a rule ', function () {
    $this->artisan('make:rule-attribute', [
        'name' => 'AcceptedIf',
    ])->assertExitCode(0);

    $this->assertFileExists(app_path('Rules/AcceptedIf.php'));
});
