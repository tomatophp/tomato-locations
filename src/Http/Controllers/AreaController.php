<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class AreaController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-locations::areas.index',
            table: \TomatoPHP\TomatoLocations\Tables\AreaTable::class,
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
            model: \TomatoPHP\TomatoLocations\Models\Area::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-locations::areas.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\Area\AreaStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoLocations\Http\Requests\Area\AreaStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoLocations\Models\Area::class,
            message: trans('tomato-locations::global.area.message.store'),
            redirect: 'admin.areas.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Area $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoLocations\Models\Area $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::areas.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Area $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoLocations\Models\Area $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::areas.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\Area\AreaUpdateRequest $request
     * @param \TomatoPHP\TomatoLocations\Models\Area $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoLocations\Http\Requests\Area\AreaUpdateRequest $request, \TomatoPHP\TomatoLocations\Models\Area $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: trans('tomato-locations::global.area.message.update'),
            redirect: 'admin.areas.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Area $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoLocations\Models\Area $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: trans('tomato-locations::global.area.message.delete'),
            redirect: 'admin.areas.index',
        );
    }
}
