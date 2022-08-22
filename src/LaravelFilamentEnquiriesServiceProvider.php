<?php

namespace Hup234design\LaravelFilamentEnquiries;

use Filament\PluginServiceProvider;
use Hup234design\LaravelFilamentEnquiries\Commands\PublishCommand;
use Spatie\LaravelPackageTools\Package;

class LaravelFilamentEnquiriesServiceProvider extends PluginServiceProvider
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
            ->hasMigration('create_enquiries_table')
            ->hasCommand(PublishCommand::class)
            ->hasRoute('web');
    }
}
