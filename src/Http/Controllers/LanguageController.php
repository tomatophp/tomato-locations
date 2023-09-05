<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;

class LanguageController extends Controller
{
    public string $model;

    public function __construct()
    {
        $this->model = \TomatoPHP\TomatoLocations\Models\Language::class;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            model: $this->model,
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


    public function store(\TomatoPHP\TomatoLocations\Http\Requests\Language\LanguageStoreRequest $request): RedirectResponse|JsonResponse
    {
        $response = Tomato::store(
            request: $request,
            model: $this->model,
            message: __('Langauge Updated successfully'),
            redirect: 'admin.languages.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Language $model
     * @return View
     */
    public function show(\TomatoPHP\TomatoLocations\Models\Language $model): View|JsonResponse
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
     * @return RedirectResponse|JsonResponse
     */
    public function update(\TomatoPHP\TomatoLocations\Http\Requests\Language\LanguageUpdateRequest $request, \TomatoPHP\TomatoLocations\Models\Language $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: trans('tomato-locations::global.language.message.update'),
            redirect: 'admin.languages.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Language $model
     * @return RedirectResponse|JsonResponse
     */
    public function destroy(\TomatoPHP\TomatoLocations\Models\Language $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: trans('tomato-locations::global.language.message.delete'),
            redirect: 'admin.languages.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }
}
