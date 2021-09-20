<?php

namespace KatalinKS\PersonType\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use KatalinKS\PersonType\PersonTypeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'KatalinKS\\PersonType\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            PersonTypeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_person-type-laravel_table.php.stub';
        $migration->up();
        */
    }
}
