<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Auth\LoginController;
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

Route::namespace('User')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm']);
    Route::post('/login', [LoginController::class, 'login'])->name('user.login');
    Route::get('/', [HomeController::class, 'index']);
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/profile', [HomeController::class, 'profile']);
    });
});
