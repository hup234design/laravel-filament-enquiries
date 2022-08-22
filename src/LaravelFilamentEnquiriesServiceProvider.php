<?php

namespace Hup234design\LaravelFilamentEnquiries;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hup234design\LaravelFilamentEnquiries\Commands\LaravelFilamentEnquiriesCommand;

class LaravelFilamentEnquiriesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-filament-enquiries')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-filament-enquiries_table')
            ->hasCommand(LaravelFilamentEnquiriesCommand::class);
    }
}
