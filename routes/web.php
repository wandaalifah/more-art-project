<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminCrewController;
use App\Http\Controllers\AdminProjectPhotosController;
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
    Route::middleware('auth')->group(function () {
        Route::resource('/projects', AdminProjectController::class);
        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/crews', AdminCrewController::class);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/changePassword', [AuthController::class, 'changePassword'])->name('admin.changePassword');
        Route::post('/updatePassword', [AuthController::class, 'updatePassword'])->name('admin.updatePassword');

        Route::resource('projects.photos', AdminProjectPhotosController::class)->only(['index', 'store', 'destroy']);
    });
    Route::post('/', [AuthController::class, 'login'])->name('admin.login');
    Route::get('/', [AdminController::class, 'index']);
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/works', [HomeController::class, 'works'])->name('home.works');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
