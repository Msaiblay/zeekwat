<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoureController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SubategoryController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\FrotendController;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::resource('/',FrotendController::class);
Route::resource('/teachercourses',CoureController::class);
Route::resource('/categories',CategoryController::class);
Route::resource('/subcategories',SubategoryController::class);
Route::resource('/languages',LanguageController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
