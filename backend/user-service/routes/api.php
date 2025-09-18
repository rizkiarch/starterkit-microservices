<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/users', function (Request $request) {
    return response()->json([
        'id' => 1,
        'name' => 'John Doe',
        'email' => 'example@dev.com',
    ]);
});
