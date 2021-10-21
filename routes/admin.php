<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TeamController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PermissonController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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

Route::group(['middleware' => ['auth', 'role.admin'], 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    // Staff
    Route::resource('staffs', UserMatchController::class);

    // Permission
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('permissons', [PermissonController::class, 'index'])->name('permissons.index');

    // Tournament
    Route::get('/tournament', [TournamentController::class, 'index'])->name('tournament');
    Route::get('/createTournament', [TournamentController::class, 'create'])->name('createTournament');
    Route::get('/createTournament', [TeamController::class, 'getTeamCreateTournament'])->name('createTournament');
    Route::get('/editTournament/{id?}', [TournamentController::class, 'edit'])->name('editTournament');
    Route::delete('deleteTournament/{id}', [TournamentController::class, 'destroy'])->name('deleteTournament');
});
