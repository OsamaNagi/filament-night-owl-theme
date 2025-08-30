<?php

namespace Nagi\FilamentNightOwlTheme;

use Illuminate\Support\ServiceProvider;

class FilamentNightOwlThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/filament-night-owl-theme.php', 'filament-night-owl-theme');

        $this->publishes([
            __DIR__ . '/../config/filament-night-owl-theme.php' => config_path('filament-night-owl-theme.php'),
        ], 'filament-night-owl-theme-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/filament-night-owl-theme'),
        ], 'filament-night-owl-theme-views');
    }

    public function boot(): void
    {
        //
    }
}
