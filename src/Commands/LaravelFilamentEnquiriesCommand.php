<?php

namespace Hup234design\LaravelFilamentEnquiries\Commands;

use Illuminate\Console\Command;

class LaravelFilamentEnquiriesCommand extends Command
{
    public $signature = 'laravel-filament-enquiries';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
