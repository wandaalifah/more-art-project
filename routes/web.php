<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\HomeController;

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

Route::prefix('admin')->group(function () {
    Route::resource('/projects', AdminProjectController::class);
    Route::resource('/categories', AdminCategoryController::class);
    // Route::resource('/', AdminHomeController::class);
});

// Route::resource('/projects', ProjectController::class);
// Route::resource('/categories', CategoryController::class);
Route::resource('/', HomeController::class);