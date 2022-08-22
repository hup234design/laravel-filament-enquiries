<?php

namespace Hup234design\LaravelFilamentEnquiries\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    public $signature = 'laravel-filament-enquiries:publish {--force : Overwrite any existing files}';

    public $description = 'PublishCommand all Laravel Filament Enquiries components and resources';

    public function handle(): int
    {
        // publish Filament Enquiries files
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-filament-enquiries-config', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-filament-enquiries-migrations', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-filament-enquiries-views', '--force' => $this->option('force') ?? false]);
        $this->output->success('HUP234 Filament Enquiries has been Published successfully');

        return self::SUCCESS;
    }
}
