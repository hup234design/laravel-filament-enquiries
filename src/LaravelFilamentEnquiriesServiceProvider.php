<?php

namespace Hup234design\LaravelFilamentEnquiries;

use Hup234design\LaravelFilamentEnquiries\Commands\LaravelFilamentEnquiriesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
