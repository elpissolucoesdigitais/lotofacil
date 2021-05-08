<?php

use App\Http\Controllers\CartoesController;
use Illuminate\Support\Facades\Auth;
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

Route::resource('cartoes', 'App\Http\Controllers\CartoesController');

Route::get('pages.numerosjogados.home', [CartoesController::class])->name('cartoes.home');

Route::get('/', function () {
    return view('/pages/numerosjogados/home');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
