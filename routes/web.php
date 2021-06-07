<?php

use App\Http\Controllers\JogoController;
use App\Http\Controllers\ConcursoController;
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
Route::post('jogo/search', [JogoController::class, 'search'])->name('jogo.search');
Route::resource('jogo', 'App\Http\Controllers\JogoController');
Route::get('/', [JogoController::class, 'home'])->name('jogo.home');


/*
Rotas para os numeros sorteados
*/
Route::post('concurso/search', [ConcursoController::class, 'search'])->name('concurso.search');
Route::resource('concurso', 'App\Http\Controllers\ConcursoController');


// Route::get('/', function () {
//     return view('/pages/numerosjogados/home');
// });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
