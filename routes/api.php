<?php

use App\Http\Controllers\Api\TicketController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'auth:sanctum'], function ()
{
    Route::get('/users', function (Request $request) {
        return $request->user();
    });
});

Route::get('ticket', [TicketController::class, 'index'])->name('ticket.index');
Route::get('ticket/detail/{id}', [TicketController::class, 'show'])->name('ticket.detail');
