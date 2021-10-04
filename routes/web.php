<?php

use App\Http\Controllers\HomeController;
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

Route::get('/login', [UserLoginController::class, 'showLoginForm']);
Route::post('/login', [UserLoginController::class, 'login'])->name('user.login');

Route::get('/', [HomeController::class, 'index']);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [HomeController::class, 'profile']);
});
