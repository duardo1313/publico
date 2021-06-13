<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return redirect('index');
})->middleware(['auth'])->name('dashboard');

Route::get('/index', function () {
    return view('index');
});

Route::get('/sabores', function () {
    return view('sabores');
});

Route::get('/sobre_nosotros', function () {
    return view('sobre_nosotros');
});




require __DIR__.'/auth.php';
