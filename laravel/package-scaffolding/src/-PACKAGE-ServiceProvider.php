<?php

namespace -NAMESPACE-\-PACKAGE-;

use Illuminate\Support\ServiceProvider;

class -PACKAGE-ServiceProvider extends ServiceProvider
{

    public function boot()
    {

        // Include routes for module
        include __DIR__.'/Routes/http.php';
        //include __DIR__.'/Routes/api.php';

        //
        // Publish config file to application
        //
        // Once the `php artisan vendor::publish` command is run, you can use
        // the configuration file values `$value = config('account.option');`
        //
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('-package-.php'),
        ]);

        //
        // Merge config file into application config
        //
        // This allows users to override any module configuration values with
        // their own values in the application config file.
        //
        $this->mergeConfigFrom(
            __DIR__.'/Config/config.php', '-package'
        );

        //
        // Load database migrations
        //
        // Any database changes must be stored as a migration. When using the
        // `php artisan make:migration` command, simply copy the file into the
        // module's Migrations directory.
        //
        // Once the package migrations have been registered, they will be run
        // when the `php artisan migrate` command is executed. You do not need
        // to export them to the application's database/migrations directory.
        //
        $this->loadMigrationsFrom(__DIR__.'/Migrations');

        //
        // Publish public assets to application directory
        //
        // This package may have assets such as JavaScript, CSS, and images that
        // need to be published to the application's public directory.
        //
        $this->publishes([
            __DIR__.'/Assets' => public_path('vendor/-namespace-/-package-'),
        ], 'public');

    }

    public function register()
    {

        // Register all controller classes
        // Any time a file is created in `Controllers/` it needs to be added here
        $this->app->make('Riverbedlab\Event\Controllers\Http\-PACKAGE-DashboardController');

        // Register the views directory
        // You can use any views from this module using `-package-::path/to/view`
        $this->loadViewsFrom(__DIR__.'/Views', '-package-');

    }

}
