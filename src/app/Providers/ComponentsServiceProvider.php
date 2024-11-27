<?php

namespace Kovyakin\Components\app\Providers;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Kovyakin\Components\app\Console\Commands\InstallComponentsCommand;
use Kovyakin\Components\app\Console\Commands\makeTableCommand;
use Kovyakin\Components\app\Console\Commands\makeTableController;
use Kovyakin\Components\app\View\Components\ChartsComponent;
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
                makeTableController::class,
            ]);
        }
        $this->loadRoutesFrom(__DIR__.'../../../routes/components.php');

        Blade::component('table-component', TableComponent::class);

        Blade::component('charts-component', ChartsComponent::class);

        $this->publishes([
            __DIR__.'/../../public' => public_path('vendor/kovyakin/components'),
        ], 'components');

        $this->loadViewsFrom(__DIR__.'/../../resources/views/components', 'components');


    }
}
