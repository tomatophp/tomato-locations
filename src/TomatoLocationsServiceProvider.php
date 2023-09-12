<?php

namespace TomatoPHP\TomatoLocations;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoAdmin\Facade\TomatoMenu;
use TomatoPHP\TomatoLocations\Console\TomatoLocationsInstall;
use TomatoPHP\TomatoLocations\Menus\LocationsMenu;
use TomatoPHP\TomatoLocations\Views\Location;
use TomatoPHP\TomatoPHP\Services\Menu\TomatoMenuRegister;
use TomatoPHP\TomatoRoles\Services\Permission;
use TomatoPHP\TomatoRoles\Services\TomatoRoles;
use TomatoPHP\TomatoAdmin\Services\Contracts\Menu;


class TomatoLocationsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
            TomatoLocationsInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__ . '/../config/tomato-locations.php', 'tomato-locations');

        //Publish Config
        $this->publishes([
            __DIR__ . '/../config/tomato-locations.php' => config_path('tomato-locations.php'),
        ], 'tomato-locations-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        //Publish Migrations
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'tomato-locations-migrations');

        //Register views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tomato-locations');

        //Publish Views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/tomato-locations'),
        ], 'tomato-locations-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'tomato-locations');

        //Publish Lang
        $this->publishes([
            __DIR__ . '/../resources/lang' => app_path('lang/vendor/tomato-locations'),
        ], 'tomato-locations-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');

        $this->registerPermissions();

        $this->loadViewComponentsAs('tomato', [
            Location::class
        ]);
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
        $this->bootMenu();
    }

    protected function bootMenu(): void
    {
        TomatoMenu::register([
                Menu::make()
                    ->group(__('Locations'))
                    ->label(trans('tomato-locations::global.country.title'))
                    ->icon("bx bxs-flag")
                    ->route("admin.countries.index"),
                Menu::make()
                    ->group(__('Locations'))
                    ->label(trans('tomato-locations::global.city.title'))
                    ->icon("bx bxs-city")
                    ->route("admin.cities.index"),
                Menu::make()
                    ->group(__('Locations'))
                    ->label(trans('tomato-locations::global.area.title'))
                    ->icon("bx bxs-map")
                    ->route("admin.areas.index"),
                Menu::make()
                    ->group(__('Locations'))
                    ->label(trans('tomato-locations::global.language.title'))
                    ->icon("bx bx-globe")
                    ->route("admin.languages.index"),
                Menu::make()
                    ->group(__('Locations'))
                    ->label(trans('tomato-locations::global.currency.title'))
                    ->icon("bx bx-money")
                    ->route("admin.currencies.index"),
                Menu::make()
                    ->group(__('Locations'))
                    ->label(trans('tomato-locations::global.settings.title'))
                    ->icon("bx bxs-cog")
                    ->route("admin.settings.locations.index")
            ]
        );
    }
}
