<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;
use TomatoPHP\TomatoLocations\Models\Area;
use TomatoPHP\TomatoLocations\Tables\AreaTable;

class AreaController extends Controller
{
    public string $model;

    public function __construct()
    {
        $this->model = Area::class;
    }


    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View|JsonResponse
    {
        return Tomato::index(
            request: $request,
            model: $this->model,
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
    public function store(\TomatoPHP\TomatoLocations\Http\Requests\Area\AreaStoreRequest $request): RedirectResponse|JsonResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoLocations\Models\Area::class,
            message: trans('tomato-locations::global.area.message.store'),
            redirect: 'admin.areas.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Area $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoLocations\Models\Area $model): View|JsonResponse
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
    public function update(\TomatoPHP\TomatoLocations\Http\Requests\Area\AreaUpdateRequest $request, \TomatoPHP\TomatoLocations\Models\Area $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: trans('tomato-locations::global.area.message.update'),
            redirect: 'admin.areas.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Area $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoLocations\Models\Area $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: trans('tomato-locations::global.area.message.delete'),
            redirect: 'admin.areas.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }
}
