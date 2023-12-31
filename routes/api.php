<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;

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


Route::middleware('api')->group(function () {
Route::resource('chambres', ChambreController::class);
});
Route::middleware('api')->group(function () {
Route::resource('hotels', HotelController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('reservations', ReservationController::class);
    });


// Route::get('/res/{idres}',
// [ReservationController::class,'showReservationByCAT']);
