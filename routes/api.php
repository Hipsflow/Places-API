<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;


Route::get('/list/places/{name?}', [PlaceController::class, 'index']);
Route::post('/create/place', [PlaceController::class, 'store']);
Route::put('/update/place/{place}', [PlaceController::class, 'update']);
Route::get('/show/place/{place}', [PlaceController::class, 'show']);
Route::delete('/delete/place/{place}', [PlaceController::class, 'destroy']);


