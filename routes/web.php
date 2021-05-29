<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/buku',[BukuController::Class,'buku0060']);
Route::get('/buku/cari',[BukuController::Class,'cari']);
Route::get('/join',[BukuController::Class,'innerjoin']);
Route::get('/join/cari',[BukuController::Class,'carijoin']);
