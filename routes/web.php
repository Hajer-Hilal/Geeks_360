<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard\Homcontroller;
USE App\Http\Controllers\Dashboard\sectioncontroller;
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

Route::get('/', [HomeController::class, 'index'])->name('home.view');

Route::get('/login', [LoginController::class, 'index'])->name('login.view');
Route::post('/login', [LoginController::class, 'login'])->name('login.action.view');

Route::get('/register', [TraineeController::class, 'index'])->name('register.view');
Route::post('/register', [TraineeController::class, 'store'])->name('register.action.view');

Route::get('/add', [TraineeController::class, 'index_add'])->name('add.view');
Route::post('/add', [TraineeController::class, 'store_add'])->name('add.action.view');

Route::get('/report', [TraineeController::class, 'show'])->name('report.view');
Route::post('/report', [TraineeController::class, 'show'])->name('report.action.view');

Route::prefix('/Dashboard')->group(function(){
    //hero
    Route::get('/', [Homcontroller::class,'index'])->name('dashboard.view');
    Route::get('/Student', [sectioncontroller::class,'Student'])->name('dashboard.student.view');
    Route::get('/Report', [sectioncontroller::class,'report'])->name('dashboard.report.view');
    Route::get('/signout', [sectioncontroller::class,'signout'])->name('dashboard.signout.view');
    Route::get('/edit/{id}', [TraineeController::class, 'edit'])->name('edit.view');
    Route::put('/update/{id}', [TraineeController::class, 'update'])->name('update.view');
    Route::delete('/Delete/{id}', [Traineecontroller::class,'delete'])->name('delete');
   
});
