<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class LanguageController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'tomato-locations::languages.index',
            table: \TomatoPHP\TomatoLocations\Tables\LanguageTable::class,
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
            model: \TomatoPHP\TomatoLocations\Models\Language::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'tomato-locations::languages.create',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\Language\LanguageStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\TomatoPHP\TomatoLocations\Http\Requests\Language\LanguageStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \TomatoPHP\TomatoLocations\Models\Language::class,
            message: trans('tomato-locations::global.language.message.store'),
            redirect: 'admin.languages.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Language $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoLocations\Models\Language $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::languages.show',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Language $model
     * @return View
     */
    public function edit(\TomatoPHP\TomatoLocations\Models\Language $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'tomato-locations::languages.edit',
        );
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Http\Requests\Language\LanguageUpdateRequest $request
     * @param \TomatoPHP\TomatoLocations\Models\Language $user
     * @return RedirectResponse
     */
    public function update(\TomatoPHP\TomatoLocations\Http\Requests\Language\LanguageUpdateRequest $request, \TomatoPHP\TomatoLocations\Models\Language $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: trans('tomato-locations::global.language.message.update'),
            redirect: 'admin.languages.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Language $model
     * @return RedirectResponse
     */
    public function destroy(\TomatoPHP\TomatoLocations\Models\Language $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: trans('tomato-locations::global.language.message.delete'),
            redirect: 'admin.languages.index',
        );
    }
}
