<?php

namespace NothingWorks\Dock\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dock:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish the Dock files for Docker';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'dock-docker']);

        file_put_contents(
            $this->laravel->basePath('docker-compose.yml'),
            str_replace(
                [
                    './vendor/nothing-works/dock/.docker',
                ],
                [
                    './.docker',
                ],
                file_get_contents($this->laravel->basePath('docker-compose.yml'))
            )
        );
    }
}
