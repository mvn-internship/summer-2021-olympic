<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserMatchController;
use App\Http\Controllers\Api\TournamentController;

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

Route::apiResource('users', App\Http\Controllers\API\UserController::class);
Route::apiResource('roles', App\Http\Controllers\API\RoleController::class);
Route::apiResource('permissions', App\Http\Controllers\API\PermissionController::class);

// Staff
Route::apiResource('staffs', UserMatchController::class, [
    'as' => 'api'
]);

// Tournament
Route::post('/storeTournament', [TournamentController::class, 'store'])->name('admin.storeTournament');
Route::put('/updateTournament/{id?}', [TournamentController::class, 'update'])->name('admin.updateTournament');
