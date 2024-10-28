<?php

use App\Http\Controllers\AdminProjectCrewController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminCrewController;
use App\Http\Controllers\AdminProjectPhotosController;
use App\Http\Controllers\AdminCrewProjectController;
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
    Route::post('/', [AuthController::class, 'login'])->name('admin.login');
    Route::get('/', [AdminController::class, 'index']);

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/changePassword', [AuthController::class, 'changePassword'])->name('admin.changePassword');
        Route::post('/updatePassword', [AuthController::class, 'updatePassword'])->name('admin.updatePassword');

        Route::resource('/projects', AdminProjectController::class);
        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/crews', AdminCrewController::class);
        Route::resource('projects.photos', AdminProjectPhotosController::class)->only(['index', 'store', 'destroy']);
       

        // Route::resource('projects.details', AdminProjectCrewController::class)
        //     ->parameters(['details' => 'crew'])     
        //     ->only(['index', 'create', 'store', 'edit', 'update', 'show', 'destroy']);
        
        Route::get('/projects/{project}/crew', [AdminProjectCrewController::class, 'index'])->name('projects.details.index');
        Route::get('/projects/{project}/crew/create', [AdminProjectCrewController::class, 'create'])->name('projects.details.create');
        Route::post('/projects/{project}/crew/create', [AdminProjectCrewController::class, 'store'])->name('projects.details.store');
        Route::get('/projects/{project}/crew/{project_crew}/edit', [AdminProjectCrewController::class, 'edit'])->name('projects.details.edit');
        Route::put('/projects/{project}/crew/{project_crew}', [AdminProjectCrewController::class, 'update'])->name('projects.details.update');
        Route::get('/projects/{project}/crew/{project_crew}', [AdminProjectCrewController::class, 'show'])->name('projects.details.show');
        Route::delete('/projects/{project}/crew/{project_crew}', [AdminProjectCrewController::class, 'destroy'])->name('projects.details.destroy');

        Route::get('/crews/{crew}/project', [AdminCrewProjectController::class, 'index'])->name('crews.details.index');
        Route::get('/crews/{crew}/project/create', [AdminCrewProjectController::class, 'create'])->name('crews.details.create');
        Route::post('/crews/{crew}/project/create', [AdminCrewProjectController::class, 'store'])->name('crews.details.store');
        Route::get('/crews/{crew}/project/{project_crew}/edit', [AdminCrewProjectController::class, 'edit'])->name('crews.details.edit');
        Route::put('/crews/{crew}/project/{project_crew}', [AdminCrewProjectController::class, 'update'])->name('crews.details.update');
        Route::get('/crews/{crew}/project/{project_crew}', [AdminCrewProjectController::class, 'show'])->name('crews.details.show');
        Route::delete('/crews/{crew}/project/{project_crew}', [AdminCrewProjectController::class, 'destroy'])->name('crews.details.destroy');

    });
   
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/works', [HomeController::class, 'works'])->name('home.works');
Route::get('/works-detail/{id}', [HomeController::class, 'worksDetail'])->name('home.works.detail');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::post('/send-email', [HomeController::class, 'sendEmail'])->name('home.about.sendEmail');
