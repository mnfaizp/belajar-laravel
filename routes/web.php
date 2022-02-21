<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('authentication.login');
});

Route::get('/register', function() {
    return view('authentication.register');
})->name('auth.register.show');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/{id}/delete', [ProductController::class, 'destroy'])->name('products.delete');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');


Route::post('/register/store', [AuthenticationController::class, 'register'])->name('auth.register.store');
Route::post('/login', [AuthenticationController::class, 'login'])->name('auth.login');
