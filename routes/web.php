<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProfileController;
use App\http\Controllers\UserController;

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

// PRAKTIKUM 2

Route::get('/profile', [ProfileController::class, 'profile']);

// Route::get('/profile/{nama}/{kelas}/{npm}', 
// [ProfileController::class, 'profile']);


//PRAKTIKUM 3

Route::get('/user/profile', [UserController::class, 'profile']);

Route::get('/user/create', [UserController::class, 'create'])->name('users.create');

Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

//PRAKTIKUM 5

Route::get('/user', [UserController::class, 'index'])->name('user.list');

// PRAKTIKUM 6

Route::get('/show/{id}', [UserController::class, 'show'])->name('users.show');

// PRAKTIKUM 7

Route::put('/user/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/user/{id}', [UserController::class, 'show'])->name('users.show');