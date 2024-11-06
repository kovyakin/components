<?php

namespace Kovyakin\Components\app\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Kovyakin\Components\app\Console\Commands\InstallComponentsCommand;
use Kovyakin\Components\app\Console\Commands\makeTableCommand;
use Kovyakin\Components\app\View\Components\TableComponent;

class ComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                makeTableCommand::class,
                InstallComponentsCommand::class,
            ]);
        }
        Blade::component('table-component', TableComponent::class);
        $this->publishes([
            __DIR__.'/../../public' => public_path('vendor/components'),
        ], 'components');

        $this->loadViewsFrom(__DIR__.'/../../resources/views/components', 'components');

    }
}
