<?php

Route::name('api.')->middleware(['auth:sanctum'])->prefix('api')->group(function (){
    Route::get('countires',[\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class,'index'])->name('countires.index');
    Route::get('countires/{model}',[\TomatoPHP\TomatoLocations\Http\Controllers\CountryController::class,'show'])->name('countires.show');
    Route::get('cities',[\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class,'index'])->name('cities.index');
    Route::get('cities/{model}',[\TomatoPHP\TomatoLocations\Http\Controllers\CityController::class,'show'])->name('cities.show');
    Route::get('areas',[\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class,'index'])->name('areas.index');
    Route::get('areas/{model}',[\TomatoPHP\TomatoLocations\Http\Controllers\AreaController::class,'show'])->name('areas.show');
});
