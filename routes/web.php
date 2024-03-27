<?php

use App\Http\Controllers\AppointController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoomController;
use Faker\Factory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hospital', function () {
    return view('home');
});




Route::resource('/room', RoomController::class);


Route::resource('/mess', MessageController::class);

Route::resource('/drug', DrugController::class);

Route::resource('/appoint', AppointController::class);