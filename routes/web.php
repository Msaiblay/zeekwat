<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoureController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubategoryController;
use App\Http\Controllers\AuthController;
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

Route::get('login',[AuthController::class,'loginform'])->name('login');
Route::post('login',[AuthController::class,'login']);

Route::get('studentregister',[AuthController::class,'studentregisterform'])->name('studentregister');
Route::post('studentregister',[AuthController::class,'studentregister']);

Route::get('teacherregister',[AuthController::class,'teacherregisterform'])->name('teacherregister');
Route::post('teacherregister',[AuthController::class,'teacherregister']);

Route::get('/',[FrotendController::class,'index'])->name('frontend.home');

Route::resource('/teachercourses',CoureController::class);
Route::resource('/categories',CategoryController::class);
Route::resource('/subcategories',SubategoryController::class);
Route::resource('/languages',LanguageController::class);
Route::resource('/students',StudentController::class);
Route::resource('/teachers',TeacherController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
