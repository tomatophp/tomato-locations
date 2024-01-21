<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use TomatoPHP\TomatoLocations\Http\Requests\Settings\LocationsSettingsRequest;
use TomatoPHP\TomatoLocations\Models\Country;
use TomatoPHP\TomatoLocations\Settings\LocationsSettings;
use TomatoPHP\TomatoSettings\Http\Requests\Settings\GoogleSettingsRequest;
use TomatoPHP\TomatoSettings\Http\Requests\Settings\SiteSettingsRequest;
use TomatoPHP\TomatoSettings\Services\Setting;
use TomatoPHP\TomatoSettings\Settings\GoogleSettings;

class LocationSettingsController extends Setting
{
    public string $setting = LocationsSettings::class;

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return $this->get(request: $request, view:'tomato-locations::settings.location');
    }

    /**
     * @param LocationsSettingsRequest $request
     * @return RedirectResponse
     */
    public function store(LocationsSettingsRequest $request): RedirectResponse
    {
        return $this->save(request: $request, redirect: "admin.settings.locations.index");
    }
}
