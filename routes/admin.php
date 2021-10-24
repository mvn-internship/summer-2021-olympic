<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchSoccerController;
use App\Http\Controllers\UserMatchController;
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

Route::get('/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'role.admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('matches', MatchSoccerController::class);
    Route::get('/matches/{id}/results', [MatchSoccerController::class, 'result'])->name('matches.results');
    Route::resource('staffs', UserMatchController::class);
});
