<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\TournamentController;
use App\Http\Controllers\Api\UserMatchController;

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

Route::get('teams', [TeamController::class, 'index']);
Route::post('/storeTournament', [TournamentController::class, 'store'])->name('admin.storeTournament');
Route::put('/updateTournament/{id?}', [TournamentController::class, 'update'])->name('admin.updateTournament');
Route::apiResource('staffs', UserMatchController::class, [
    'as' => 'api'
]);
