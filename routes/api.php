<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
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

//Routes for Technician
Route::post('/logintech', [MobileController::class, 'loginTech']);
Route::get('/ticketlist', [MobileController::class, 'ticketList']);
Route::get('/ticketdetails/{id}', [MobileController::class, 'ticketDetails']);
Route::put('/tickets/{id}/status', [MobileController::class, 'updateStatus']);
Route::put('/complete/{id}', [MobileController::class, 'updateComplete']);
Route::get('/countNew', [MobileController::class, 'countTickets']);

Route::get('/Techlogout', [CustomAuthController::class, 'Techlogout']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
