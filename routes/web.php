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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');


Route::resource('usuarios',\App\Http\Controllers\UserController::class)->middleware(['auth','verified']);

Route::resource('perfil',\App\Http\Controllers\PefilController::class)->middleware(['auth','verified']);

Route::resource('linea', \App\Http\Controllers\LineaController::class)->middleware(['auth', 'verified']);

Route::resource('estacion', \App\Http\Controllers\EstacionController::class)->middleware(['auth', 'verified']);

Route::resource('vagon',\App\Http\Controllers\VagonController::class)->middleware(['auth', 'verified']);

Route::resource('billete',\App\Http\Controllers\BilleteController::class)->middleware(['auth', 'verified']);

Route::get('/ofertas',function(){
    return view('ofertas');
});


require __DIR__.'/auth.php';
