<?php

namespace Hup234design\LaravelFilamentEnquiries\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    public $signature = 'filament-enquiries:publish {--force : Overwrite any existing files}';

    public $description = 'Publish all Laravel Filament Enquiries components and resources';

    public function handle(): int
    {
        // publish Filament Enquiries files
        $this->call('vendor:publish', ['--tag' => 'filament-enquiries-config', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'filament-enquiries-migrations', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'filament-enquiries-views', '--force' => $this->option('force') ?? false]);
        $this->output->success('HUP234 Filament Enquiries has been Published successfully');

        return self::SUCCESS;
    }
}
