<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Cl_Controller;
use App\Http\Controllers\Rd_Controller;
use App\Http\Controllers\Fm_Controller;
use App\Http\Controllers\Zn_Controller;
use App\Http\Controllers\Cs_Controller;
use App\Http\Controllers\api\Auth_Controller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) { return $request->user(); });

/*
Route::resource('users', TestController::class);
Route::resource('clans', Cl_Controller::class);
Route::resource('rediteljs', Rd_Controller::class);
Route::resource('films', Fm_Controller::class);
Route::resource('zanrs', Zn_Controller::class);
Route::resource('clanstvos', Cs_Controller::class);
*/

Route::post('/register', [Auth_Controller::class, 'register']);
Route::post('/login', [Auth_Controller::class, 'login']);
Route::resource('clans', Cl_Controller::class)->only(['index']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/profile', function (Request $request) { return auth()->user(); });

    Route::resource('clans', Cl_Controller::class)->only(['update', 'store', 'destroy']);

    Route::post('/logout', [Auth_Controller::class, 'logout']);
});