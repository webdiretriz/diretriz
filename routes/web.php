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

Route::get('/', function () {return view('home');})->name('home');
Route::get('/imaq', function (){return view('pages/imaq');})->name('imaq');
Route::get('/legislador', function (){return view('pages/legislador');})->name('legislador');
Route::get('/terra', function (){return view('pages/terra');})->name('terra');
