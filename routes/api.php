<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClanController;
use App\Http\Controllers\ClanstvoController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\RediteljController;
use App\Http\Controllers\ZanrController;
use App\Http\Controllers\IznajmljivanjeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/users', [UserController::class,'index']);
//Route::get('/users/{id}', [UserController::class,'show']);
Route::resource('users', UserController::class);
Route::resource('clanovi', ClanController::class);
Route::resource('clanstvo', ClanstvoController::class);
Route::resource('filmovi', FilmController::class);
Route::resource('iznajmljivanje', IznajmljivanjeController::class);
Route::resource('reditelji', RediteljController::class);
Route::resource('zanrovi', ZanrController::class);




