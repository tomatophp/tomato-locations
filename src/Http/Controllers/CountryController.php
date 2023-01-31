<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class CountryController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-locations::countries.index',
            table: \TomatoPHP\TomatoLocations\Tables\CountryTable::class,
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function api(Request $request): JsonResponse
    {
        return Tomato::json(
            request: $request,
            model: \TomatoPHP\TomatoLocations\Models\Country::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-locations::countries.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\Country\CountryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoLocations\Http\Requests\Country\CountryStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoLocations\Models\Country::class,
            message: trans('tomato-locations::global.country.message.store'),
            redirect: 'admin.countries.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Country $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoLocations\Models\Country $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::countries.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Country $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoLocations\Models\Country $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::countries.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\Country\CountryUpdateRequest $request
     * @param \TomatoPHP\TomatoLocations\Models\Country $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoLocations\Http\Requests\Country\CountryUpdateRequest $request, \TomatoPHP\TomatoLocations\Models\Country $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: trans('tomato-locations::global.country.message.update'),
            redirect: 'admin.countries.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Country $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoLocations\Models\Country $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: trans('tomato-locations::global.country.message.delete'),
            redirect: 'admin.countries.index',
        );
    }
}
