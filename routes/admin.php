<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TeamController;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchResultController;

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
    Route::get('/tournament', [TournamentController::class, 'index'])->name('admin.tournament');
    Route::get('/createTournament', [TournamentController::class, 'create'])->name('admin.createTournament');
    Route::get('/createTournament', [TeamController::class, 'getTeamCreateTournament'])->name('admin.createTournament');
    Route::get('/editTournament/{id?}', [TournamentController::class, 'edit'])->name('admin.editTournament');
    Route::delete('deleteTournament/{id}', [TournamentController::class, 'destroy'])->name('admin.deleteTournament');

    Route::get('/analysis', [MatchResultController::class, 'showAnalysis'])->name('admin.listAnalysis');

    Route::resource('staffs', UserMatchController::class);
});
