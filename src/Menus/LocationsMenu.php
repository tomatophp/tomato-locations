<?php

namespace TomatoPHP\TomatoLocations\Menus;

use TomatoPHP\TomatoPHP\Services\Menu\Menu;
use TomatoPHP\TomatoPHP\Services\Menu\TomatoMenu;

class LocationsMenu extends TomatoMenu
{
    /**
     * @var ?string
     * @example ACL
     */
    public ?string $group = "Locations";

    /**
     * @var ?string
     * @example dashboard
     */
    public ?string $menu = "dashboard";

    public function __construct()
    {
        $this->group = trans('tomato-locations::global.group');
    }

    /**
     * @return array
     */
    public static function handler(): array
    {
        return [
            Menu::make()
                ->label(trans('tomato-locations::global.country.title'))
                ->icon("bx bxs-flag")
                ->route("admin.countries.index"),
            Menu::make()
                ->label(trans('tomato-locations::global.city.title'))
                ->icon("bx bxs-city")
                ->route("admin.cities.index"),
            Menu::make()
                ->label(trans('tomato-locations::global.area.title'))
                ->icon("bx bxs-map")
                ->route("admin.areas.index"),
            Menu::make()
                ->label(trans('tomato-locations::global.language.title'))
                ->icon("bx bx-globe")
                ->route("admin.languages.index"),
            Menu::make()
                ->label(trans('tomato-locations::global.currency.title'))
                ->icon("bx bx-money")
                ->route("admin.currencies.index"),
            Menu::make()
                ->label(trans('tomato-locations::global.settings.title'))
                ->icon("bx bxs-cog")
                ->route("admin.settings.locations.index"),

        ];
    }
}
