<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\PCBuildController;
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

Route::resource('components', ComponentController::class);
Route::resource('pcbuilds', PCBuildController::class);
