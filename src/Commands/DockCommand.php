<?php

namespace NothingWorks\Dock\Commands;

use Illuminate\Console\Command;

class DockCommand extends Command
{
    public $signature = 'nothing-works-dock';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
