<?php

namespace NothingWorks\Dock;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NothingWorks\Dock\Commands\DockCommand;

class DockServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('nothing-works-dock')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_nothing-works-dock_table')
            ->hasCommand(DockCommand::class);
    }
}
