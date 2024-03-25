<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('redirects', [HomeController::class, 'redirects'])->name('redirects');
Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');
Route::get('/foodmenu', [AdminController::class, 'foodmenu'])->name('foodmenu');
Route::post('/uploadfood', [AdminController::class, 'uploadfood'])->name('uploadfood');
Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu'])->name('deletemenu');
Route::get('/updateview/{id}', [AdminController::class, 'updateview'])->name('updateview');
Route::post('/update/{id}', [AdminController::class, 'update'])->name('update');


require __DIR__.'/auth.php';
