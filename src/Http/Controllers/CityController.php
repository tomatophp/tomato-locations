<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class CityController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-locations::cities.index',
            table: \TomatoPHP\TomatoLocations\Tables\CityTable::class,
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
            model: \TomatoPHP\TomatoLocations\Models\City::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-locations::cities.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\City\CityStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoLocations\Http\Requests\City\CityStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoLocations\Models\City::class,
            message: trans('tomato-locations::global.city.message.store'),
            redirect: 'admin.cities.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\City $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoLocations\Models\City $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::cities.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\City $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoLocations\Models\City $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::cities.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\City\CityUpdateRequest $request
     * @param \TomatoPHP\TomatoLocations\Models\City $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoLocations\Http\Requests\City\CityUpdateRequest $request, \TomatoPHP\TomatoLocations\Models\City $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: trans('tomato-locations::global.city.message.update'),
            redirect: 'admin.cities.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\City $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoLocations\Models\City $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: trans('tomato-locations::global.city.message.delete'),
            redirect: 'admin.cities.index',
        );
    }
}
