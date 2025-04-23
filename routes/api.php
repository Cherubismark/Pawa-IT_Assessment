<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Test route to confirm API is working
Route::get('/test', function () {
    return response()->json(['message' => 'API route is working!']);
});
