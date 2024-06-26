<?php



Route::middleware(array_merge(['splade', 'auth'], config('tomato-admin.route_middlewares')))->name('admin.')->group(function () {
    Route::get('admin/countries', [\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class, 'index'])->name('countries.index');
    Route::get('admin/countries/api', [\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class, 'api'])->name('countries.api');
    Route::get('admin/countries/create', [\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class, 'create'])->name('countries.create');
    Route::post('admin/countries', [\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class, 'store'])->name('countries.store');
    Route::get('admin/countries/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class, 'show'])->name('countries.show');
    Route::get('admin/countries/{model}/edit', [\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class, 'edit'])->name('countries.edit');
    Route::post('admin/countries/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class, 'update'])->name('countries.update');
    Route::delete('admin/countries/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class, 'destroy'])->name('countries.destroy');
});

Route::middleware(array_merge(['splade', 'auth'], config('tomato-admin.route_middlewares')))->name('admin.')->group(function () {
    Route::get('admin/cities', [\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class, 'index'])->name('cities.index');
    Route::get('admin/cities/api', [\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class, 'api'])->name('cities.api');
    Route::get('admin/cities/create', [\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class, 'create'])->name('cities.create');
    Route::post('admin/cities', [\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class, 'store'])->name('cities.store');
    Route::get('admin/cities/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class, 'show'])->name('cities.show');
    Route::get('admin/cities/{model}/edit', [\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class, 'edit'])->name('cities.edit');
    Route::post('admin/cities/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class, 'update'])->name('cities.update');
    Route::delete('admin/cities/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class, 'destroy'])->name('cities.destroy');
});

Route::middleware(array_merge(['splade', 'auth'], config('tomato-admin.route_middlewares')))->name('admin.')->group(function () {
    Route::get('admin/areas', [\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class, 'index'])->name('areas.index');
    Route::get('admin/areas/api', [\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class, 'api'])->name('areas.api');
    Route::get('admin/areas/create', [\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class, 'create'])->name('areas.create');
    Route::post('admin/areas', [\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class, 'store'])->name('areas.store');
    Route::get('admin/areas/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class, 'show'])->name('areas.show');
    Route::get('admin/areas/{model}/edit', [\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class, 'edit'])->name('areas.edit');
    Route::post('admin/areas/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class, 'update'])->name('areas.update');
    Route::delete('admin/areas/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class, 'destroy'])->name('areas.destroy');
});

Route::middleware(array_merge(['splade', 'auth'], config('tomato-admin.route_middlewares')))->name('admin.')->group(function () {
    Route::get('admin/currencies', [\TomatoPHP\TomatoLocations\Http\Controllers\CurrencyController::class, 'index'])->name('currencies.index');
    Route::get('admin/currencies/api', [\TomatoPHP\TomatoLocations\Http\Controllers\CurrencyController::class, 'api'])->name('currencies.api');
    Route::get('admin/currencies/create', [\TomatoPHP\TomatoLocations\Http\Controllers\CurrencyController::class, 'create'])->name('currencies.create');
    Route::post('admin/currencies', [\TomatoPHP\TomatoLocations\Http\Controllers\CurrencyController::class, 'store'])->name('currencies.store');
    Route::get('admin/currencies/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CurrencyController::class, 'show'])->name('currencies.show');
    Route::get('admin/currencies/{model}/edit', [\TomatoPHP\TomatoLocations\Http\Controllers\CurrencyController::class, 'edit'])->name('currencies.edit');
    Route::post('admin/currencies/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CurrencyController::class, 'update'])->name('currencies.update');
    Route::delete('admin/currencies/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\CurrencyController::class, 'destroy'])->name('currencies.destroy');
});

Route::middleware(array_merge(['splade', 'auth'], config('tomato-admin.route_middlewares')))->name('admin.')->group(function () {
    Route::get('admin/languages', [\TomatoPHP\TomatoLocations\Http\Controllers\LanguageController::class, 'index'])->name('languages.index');
    Route::get('admin/languages/api', [\TomatoPHP\TomatoLocations\Http\Controllers\LanguageController::class, 'api'])->name('languages.api');
    Route::get('admin/languages/create', [\TomatoPHP\TomatoLocations\Http\Controllers\LanguageController::class, 'create'])->name('languages.create');
    Route::post('admin/languages', [\TomatoPHP\TomatoLocations\Http\Controllers\LanguageController::class, 'store'])->name('languages.store');
    Route::get('admin/languages/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\LanguageController::class, 'show'])->name('languages.show');
    Route::get('admin/languages/{model}/edit', [\TomatoPHP\TomatoLocations\Http\Controllers\LanguageController::class, 'edit'])->name('languages.edit');
    Route::post('admin/languages/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\LanguageController::class, 'update'])->name('languages.update');
    Route::delete('admin/languages/{model}', [\TomatoPHP\TomatoLocations\Http\Controllers\LanguageController::class, 'destroy'])->name('languages.destroy');
});


Route::middleware(array_merge(['splade', 'auth'], config('tomato-admin.route_middlewares')))->prefix('admin')->name('admin.')->group(function () {
    Route::get('/settings/locations', [\TomatoPHP\TomatoLocations\Http\Controllers\LocationSettingsController::class, 'index'])->name('settings.locations.index');
    Route::post('/settings/locations', [\TomatoPHP\TomatoLocations\Http\Controllers\LocationSettingsController::class, 'store'])->name('settings.locations.store');
});
