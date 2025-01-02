<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\TaskController;
use App\Http\Controllers\api\v1\ProductController;
use App\Http\Controllers\api\v1\PurchaseController;
use App\Http\Controllers\api\v1\SupplierController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::apiResource('/tasks', TaskController::class);
    Route::apiResource('/suppliers', SupplierController::class);
    Route::apiResource('/products', ProductController::class);
    Route::apiResource('/purchases', PurchaseController::class);
});