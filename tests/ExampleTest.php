<?php

use Mbsoft31\LaravelSettings\Models\Setting;

it('can test', function () {

    /** @var Setting $setting */
    $setting = Setting::create([
        "key" => "app.locale",
        "value" => "ar"
    ]);

    $setting->metas()->createMany([
        [
            "key" => "type",
            "value" => "string",
        ],
        [
            "key" => "values",
            "value" => ["en", "ar", "fr"],
        ],
    ]);

    Setting::first()->metas->dump();
    dump(Setting::first()->metas[1]->value);

    expect(true)->toBeTrue();
});
