<?php

namespace Mbsoft31\LaravelSettings\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mbsoft31\LaravelSettings\LaravelSettingsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mbsoft31\\LaravelSettings\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelSettingsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');


        $migration = include __DIR__.'/../database/migrations/create_settings_table.php.stub';
        $migration->up();
    }
}
