<?php

namespace Hup234design\LaravelFilamentEnquiries;

use Filament\PluginServiceProvider;
use Hup234design\LaravelFilamentEnquiries\Commands\PublishCommand;
use Hup234design\LaravelFilamentEnquiries\Http\Livewire\EnquiryForm;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class LaravelFilamentEnquiriesServiceProvider extends PluginServiceProvider
{
    public static string $name = 'laravel-filament-enquiries';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        parent::configurePackage($package);
        $package
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_enquiries_table')
            ->hasCommand(PublishCommand::class)
            ->hasRoute('web');
    }

    public function boot(): void
    {
        parent::boot();
        Livewire::component('enquiry-form', EnquiryForm::class);
    }
}
