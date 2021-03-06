<?php

namespace KatalinKS\PersonType;

use KatalinKS\PersonType\Commands\PersonTypeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PersonTypeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('person-type-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_person-type-laravel_table')
            ->hasCommand(PersonTypeCommand::class);
    }
}
