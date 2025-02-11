<?php

use App\Http\Controllers\Admin\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GameController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('adminka')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('game', GameController::class);
    Route::resource('question', QuestionController::class);
});
