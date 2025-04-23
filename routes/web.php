<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'getWeather']);
Route::get('/test', function () {
    return response()->json(['status' => 'working']);
});
