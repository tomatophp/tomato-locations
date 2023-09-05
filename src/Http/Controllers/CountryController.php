<?php

namespace TomatoPHP\TomatoLocations\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;
use TomatoPHP\TomatoLocations\Models\Country;
use TomatoPHP\TomatoLocations\Tables\CountryTable;

class CountryController extends Controller
{
    public string $model;

    public function __construct()
    {
        $this->model = Country::class;
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
            view: 'tomato-locations::countries.index',
            table: CountryTable::class
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
            model: $this->model
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
    public function store(Request $request): RedirectResponse|JsonResponse
    {
        $response = Tomato::store(
            request: $request,
            model: $this->model,
            validation: [
                'name' => 'required|max:255|string',
                'code' => 'required|max:255|string',
                'phone' => 'required|max:255|min:2',
                'lat' => 'nullable|max:255|string',
                'lang' => 'nullable|max:255|string'
            ],
            message: __('Country updated successfully'),
            redirect: 'admin.countries.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Country $model
     * @return View
     */
    public function show(Country $model): View|JsonResponse
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
    public function edit(Country $model): View
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
    public function update(Request $request, Country $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            validation: [
                'name' => 'sometimes|max:255|string',
                'code' => 'sometimes|max:255|string',
                'phone' => 'sometimes|max:255|min:2',
                'lat' => 'nullable|max:255|string',
                'lang' => 'nullable|max:255|string'
            ],
            message: __('Country updated successfully'),
            redirect: 'admin.countries.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \TomatoPHP\TomatoLocations\Models\Country $model
     * @return RedirectResponse
     */
    public function destroy(Country $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: __('Country deleted successfully'),
            redirect: 'admin.countries.index',
        );

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->redirect;
    }
}
