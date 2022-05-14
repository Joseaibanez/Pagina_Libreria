<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

//Route::get('/',);

//use App\Http\Controllers\MainController;
//Route::get('/', [MainController::class, 'inicio'])->name('inicio');

Route::get('/', [MainController::class, 'inicio'])->name('inicio');
Route::get('/productos', [MainController::class, 'productos'])->name('productos');
Route::get('/info', [MainController::class, 'info'])->name('info');
Route::get('/work', [MainController::class, 'work'])->name('work');
Route::get('/login', [MainController::class, 'login'])->name('login');

// Controlador para productos
Route::resource('productos', 'App\Http\Controllers\ProductoController');
