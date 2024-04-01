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
Route::get('/reservation', [AdminController::class, 'reservation'])->name('reservation');
Route::get('/viewreservation', [AdminController::class, 'viewreservation'])->name('viewreservation');
Route::get('/viewchef', [AdminController::class, 'viewchef'])->name('viewchef');
Route::post('/uploadchef', [AdminController::class, 'uploadchef'])->name('uploadchef');
Route::get('/updatechef/{id}', [AdminController::class, 'updatechef'])->name('updatechef');
Route::post('/updatefoodchef/{id}', [AdminController::class, 'updatefoodchef'])->name('updatefoodchef');
Route::get('/deletechef/{id}', [AdminController::class, 'deletechef'])->name('deletechef');
Route::post('/addcart/{id}', [HomeController::class, 'addcart'])->name('addcart');



require __DIR__.'/auth.php';
