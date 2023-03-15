<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


require_once "web/technician.php";
require_once "web/management.php";
require_once "web/system_admin.php";
require_once "web/admin.php";

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');


Route::get('/system/admin/dashboard', [CustomAuthController::class, 'systemdashboard'])->name('systemdashboard');
Route::get('/system/admin/update', [CustomAuthController::class, 'edit'])->name('edit');



//Login for Admin
Route::post('login-admin', [CustomAuthController::class, 'loginAdmin' ])->name('login-admin');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('/logout', [CustomAuthController::class, 'logout']);



//Login for Technician
Route::post('login-tech', [CustomAuthController::class, 'loginTech' ])->name('login-tech');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('/logout', [CustomAuthController::class, 'logout']);
