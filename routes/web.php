<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClanController;
use App\Http\Controllers\RediteljController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ZanrController;
use App\Http\Controllers\ClanstvoController;






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

Route::get('/clanovi', [ClanController::class,'index']);
Route::get('/clanovi/{id}', [ClanController::class,'show']);

Route::get('/reditelji', [RediteljController::class,'index']);
Route::get('/reditelji/{id}', [RediteljController::class,'show']);

Route::get('/filmovi', [FilmController::class,'index']);
Route::get('/filmovi/{id}', [FilmController::class,'show']);

Route::get('/zanrovi', [ZanrController::class,'index']);
Route::get('/zanrovi/{id}', [ZanrController::class,'show']);

Route::get('/clanstva', [ClanstvoController::class,'index']);
Route::get('/clanstva/{id}', [ClanstvoController::class,'show']);