<?php

namespace NothingWorks\Dock;

use NothingWorks\Dock\Commands\InstallCommand;
use NothingWorks\Dock\Commands\PublishCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasCommand(InstallCommand::class)
            ->hasCommand(PublishCommand::class);
    }
}
