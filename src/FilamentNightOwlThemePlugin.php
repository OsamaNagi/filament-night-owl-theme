<?php

namespace Nagi\FilamentNightOwlTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;

class FilamentNightOwlThemePlugin implements Plugin
{
    public static function make(): static
    {
        return new static;
    }

    public function getId(): string
    {
        return 'filament-night-owl-theme';
    }

    public function register(Panel $panel): void
    {
        FilamentColor::register([
            'gray' => [
                50 => '#FBFBFB',
                100 => '#F0F0F0',
                200 => '#E0E0E0',
                300 => '#C0C0C0',
                400 => '#989FB1',
                500 => '#637777',
                600 => '#403F53',
                700 => '#2A2D3A',
                800 => '#1E2028',
                900 => '#011627',
                950 => '#000A12',
            ],
        ]);

        $panel
            ->colors([
                'danger' => Color::hex('#ff2056'),
                'info' => Color::hex('#82AAFF'),
                'primary' => [
                    50 => '#F0F6FF',
                    100 => '#E3EFFF',
                    200 => '#C7DFFF',
                    300 => '#9BC7FF',
                    400 => '#82AAFF',
                    500 => '#6B94E6',
                    600 => '#5A7BC7',
                    700 => '#4A659F',
                    800 => '#3A5082',
                    900 => '#2B3C66',
                    950 => '#1C2A4A',
                ],
                'secondary' => Color::hex('#C792EA'),
                'success' => Color::hex('#00bba7'),
                'warning' => Color::hex('#f0b100'),
            ])
            ->viteTheme('vendor/nagi/filament-night-owl-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
