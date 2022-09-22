<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', [AppController::class, 'home'])->name('home');

//Soluções
Route::get('/imaq', [AppController::class, 'imaq'])->name('imaq');
Route::get('/legislador', [AppController::class, 'legislador'])->name('legislador');
Route::get('/terra', [AppController::class, 'terra'])->name('terra');
Route::get('/gestao-rh', [AppController::class, 'gestaoRh'])->name('gestao-rh');
Route::get('/seguranca', [AppController::class, 'seguranca'])->name('seguranca');

//Cliente
Route::get('/acesso-remoto', [AppController::class, 'acessoRemoto'])->name('acesso-remoto');
Route::get('/downloads', [AppController::class, 'downloads'])->name('downloads');

//Noticias
Route::get('/noticias/{id}', [AppController::class, 'noticiasView'])->name('noticias-view');
Route::get('/noticias-lista/{categoria?}', [AppController::class, 'noticiasList'])->name('noticias-list');

