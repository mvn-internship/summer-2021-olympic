<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchSoccerController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/login', [AdminLoginController::class, 'show']);
Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
   
});
Route::resource('match', MatchSoccerController::class);