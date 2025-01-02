<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\TaskController;
use App\Http\Controllers\api\v1\SupplierController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::apiResource('/tasks', TaskController::class);
    Route::apiResource('/suppliers', SupplierController::class);
});