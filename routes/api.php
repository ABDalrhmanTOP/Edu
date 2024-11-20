<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware([EnsureFrontendRequestsAreStateful::class, 'auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [Authlogin::class, 'login'])
->middleware('auth:sanctum');
