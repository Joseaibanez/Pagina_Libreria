<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [MainController::class, 'inicio'])->name('inicio');
Route::get('/productos', [MainController::class, 'productos'])->name('productos');
Route::get('/info', [MainController::class, 'info'])->name('info');
Route::get('/work', [MainController::class, 'work'])->name('work');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/carrito', [MainController::class, 'carrito'])->name('carrito')->middleware('auth');

// Controlador para productos
Route::resource('productos', 'App\Http\Controllers\ProductoController')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Controlador para el carrito de compras
Route::resource('/cart', 'App\Http\Controllers\CartController');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
Route::post('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout');
