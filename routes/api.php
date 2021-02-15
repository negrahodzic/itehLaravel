<?php

use App\Http\Controllers\IspitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ispiti', [IspitController::class, 'index']);
Route::prefix('/ispit')->group(function (){
    Route::post('/save', [IspitController::class, 'save']);
    Route::put('/{id}', [IspitController::class, 'edit']);
    Route::delete('/{id}', [IspitController::class, 'remove']);
});