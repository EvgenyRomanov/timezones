<?php

namespace EvgenyRomanov\Timezones\Providers;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'timezones');
        $this->loadRoutesFrom(__DIR__ . '/../routes/timezones.php');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/timezones')
        ]);
    }
}
