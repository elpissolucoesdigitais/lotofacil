<?php

use App\Http\Controllers\JogosController;
use App\Http\Controllers\ConcursosController;
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

/*
Rotas para os numeros cadastrados
*/
Route::post('cartoes/search', [JogosController::class, 'search'])->name('cartoes.search');
Route::resource('cartoes', 'App\Http\Controllers\JogosController');
Route::get('pages.numerosjogados.home', [JogosController::class, 'home'])->name('cartoes.home');


/*
Rotas para os numeros sorteados
*/
Route::post('sorteados/search', [ConcursosController::class, 'search'])->name('sorteados.search');
Route::resource('sorteados', 'App\Http\Controllers\ConcursosController');




Route::get('/', function () {
    return view('/pages/numerosjogados/home');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
