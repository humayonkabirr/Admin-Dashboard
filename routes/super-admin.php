<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Super-Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Super-Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Super-Admin" middleware group. Now create something great!
|
*/


Route::resource('/', DashboardController::class);

