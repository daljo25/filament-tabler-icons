<?php

namespace Daljo25\FilamentTablerIcons;

use Filament\Support\Assets\Asset;
use Filament\Support\Facades\FilamentIcon;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentTablerIconsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-tabler-icons';

    public static string $viewNamespace = 'filament-tabler-icons';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->askToStarRepoOnGitHub('daljo25/filament-tabler-icons');
            });
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        FilamentIcon::register(TablerIcons::getIconMap());
    }

    protected function getAssetPackageName(): ?string
    {
        return 'daljo25/filament-tabler-icons';
    }
}
