<?php

namespace TomatoPHP\TomatoLocations;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoLocations\Console\TomatoLocationsInstall;
use TomatoPHP\TomatoLocations\Menus\LocationsMenu;
use TomatoPHP\TomatoPHP\Services\Menu\TomatoMenuRegister;
use TomatoPHP\TomatoRoles\Services\Permission;
use TomatoPHP\TomatoRoles\Services\TomatoRoles;


class TomatoLocationsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           TomatoLocationsInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-locations.php', 'tomato-locations');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-locations.php' => config_path('tomato-locations.php'),
        ], 'tomato-locations-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'tomato-locations-migrations');

        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-locations');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-locations'),
        ], 'tomato-locations-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-locations');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => app_path('lang/vendor/tomato-locations'),
        ], 'tomato-locations-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        TomatoMenuRegister::registerMenu(LocationsMenu::class);

        $this->registerPermissions();
    }


    /**
     * @return void
     */
    public function registerPermissions(): void
    {
        //Register Permission For Settings
        TomatoRoles::register(Permission::make()
            ->name('admin.settings.locations.index')
            ->guard('web')
            ->group('settings')
        );
        TomatoRoles::register(Permission::make()
            ->name('admin.settings.locations.store')
            ->guard('web')
            ->group('settings')
        );
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
