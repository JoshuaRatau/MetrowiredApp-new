<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/Techlogout', [CustomAuthController::class, 'Techlogout']);
Route::put('ticket-update/{id}', [TicketController::class, 'update']);
Route::put('comment-update/{id}', [CommentsController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
