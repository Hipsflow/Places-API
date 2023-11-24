<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;


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
Route::get('/list/places/{name?}', [PlaceController::class, 'index']);
Route::post('/create/place', [PlaceController::class, 'store']);
Route::put('/update/place/{place}', [PlaceController::class, 'update']);
Route::get('/show/place/{place}', [PlaceController::class, 'show']);
Route::delete('/delete/place/{place}', [PlaceController::class, 'destroy']);


