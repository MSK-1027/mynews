<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add');
});

//課題Laravel09
use App\Http\Controllers\Admin\ProfileController;
Route::controller(AAAController::class)->group(function() {
    Route::get('XXX', 'bbb');
});

Route::controller(profileController::class)->group(function() {
    Route::get('admin/profile/create', 'add');
});

Route::controller(profileController::class)->group(function() {
    Route::get('admin/profile/edit', 'edit');
});