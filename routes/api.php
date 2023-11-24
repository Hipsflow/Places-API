<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlacesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/list/places/{name?}', [PlacesController::class, 'index']);
Route::post('/create/place', [PlacesController::class, 'store']);
Route::put('/update/place/{place}', [PlacesController::class, 'update']);
Route::get('/show/place/{place}', [PlacesController::class, 'show']);
Route::delete('/delete/place/{place}', [PlacesController::class, 'destroy']);


