<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class CurrencyController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
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
    public function store(\TomatoPHP\TomatoLocations\Http\Requests\Currency\CurrencyStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoLocations\Models\Currency::class,
            message: trans('tomato-locations::global.currency.message.store'),
            redirect: 'admin.currencies.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Currency $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoLocations\Models\Currency $model): View
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
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoLocations\Http\Requests\Currency\CurrencyUpdateRequest $request, \TomatoPHP\TomatoLocations\Models\Currency $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: trans('tomato-locations::global.currency.message.update'),
            redirect: 'admin.currencies.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Currency $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoLocations\Models\Currency $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: trans('tomato-locations::global.currency.message.delete'),
            redirect: 'admin.currencies.index',
        );
    }
}
