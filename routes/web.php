<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestroController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('add', 'add');

Route::view('register', 'register');

Route::get('/', [RestroController::class, 'index']);

Route::get('/list', [RestroController::class, 'list']);

Route::post('/add', [RestroController::class, 'add']);

Route::get('/delete/{id}', [RestroController::class, 'delete']);

Route::get('/edit/{id}', [RestroController::class, 'edit']);

Route::post('/edit', [RestroController::class, 'update']);

Route::post('/register', [RestroController::class, 'register']);
