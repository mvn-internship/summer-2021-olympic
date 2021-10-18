<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserMatchController;
use App\Http\Controllers\Auth\UserLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\MatchResultController;


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

Route::get('/login', [LoginController::class, 'showUserLoginForm'])->name('user.login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', [HomeController::class, 'index'])->name('user.home');

Route::group(['middleware' => ['auth', 'role.user']], function () {
    Route::get('/profile', [HomeController::class, 'profile']);
});

Route::get('/schedule', [ScheduleController::class, 'index'])->name('user.schedule');
Route::get('/detailschedule', [ScheduleController::class, 'showsDetailSchedule'])->name('user.showsDetailSchedule');
Route::get('/ranking', [MatchResultController::class, 'showCompetitionRanking'])->name('user.showCompetitionRanking');


// Route::group(['prefix' => 'admin'] , function () {
//     Route::resource('staff', UserMatchController::class);
// });

//USER
