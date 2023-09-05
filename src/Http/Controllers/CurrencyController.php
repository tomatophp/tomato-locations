<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;

class CurrencyController extends Controller
{

    public string $model;

    public function __construct()
    {
        $this->model = \TomatoPHP\TomatoLocations\Models\Currency::class;
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
            view: 'tomato-locations::currencies.index',
            table: \TomatoPHP\TomatoLocations\Tables\CurrencyTable::class,
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
            model: \TomatoPHP\TomatoLocations\Models\Currency::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-locations::currencies.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\Currency\CurrencyStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoLocations\Http\Requests\Currency\CurrencyStoreRequest $request): RedirectResponse|JsonResponse
    {
        $response = Tomato::store(
            request: $request,
            model: $this->model,
            message: trans('tomato-locations::global.currency.message.store'),
            redirect: 'admin.currencies.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Currency $model
     * @return View|JsonResponse
     */
    public function show(\TomatoPHP\TomatoLocations\Models\Currency $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::currencies.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Currency $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoLocations\Models\Currency $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::currencies.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\Currency\CurrencyUpdateRequest $request
     * @param \TomatoPHP\TomatoLocations\Models\Currency $user
     * @return RedirectResponse|JsonResponse
     */
    public function update(\TomatoPHP\TomatoLocations\Http\Requests\Currency\CurrencyUpdateRequest $request,
                           \TomatoPHP\TomatoLocations\Models\Currency                              $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: trans('tomato-locations::global.currency.message.update'),
            redirect: 'admin.currencies.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Currency $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoLocations\Models\Currency $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: trans('tomato-locations::global.currency.message.delete'),
            redirect: 'admin.currencies.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }
}
