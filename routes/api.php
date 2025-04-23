<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// Define the weather API endpoint
Route::get('/weather', function (Request $request) {
    $city = $request->query('city');
    if (!$city) {
        return response()->json(['error' => 'City parameter is required'], 400);
    }
    
    $apiKey = 'cd1dd00f82a83f49b6020d706cb81382'; // Replace with your actual API key
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");

    return $response->json();
});