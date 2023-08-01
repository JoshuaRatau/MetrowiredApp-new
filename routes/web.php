<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TicketController;

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


Route::group(['middleware' => ['web']], function () {
    // your routes here


Route::get('/Technicianlogin', [CustomAuthController::class, 'Technician']);
Route::post('login-tech', [CustomAuthController::class, 'loginTech' ])->name('login-tech')->middleware('alreadyLoggedIn');
Route::get('/techdashboard', [CustomAuthController::class, 'techdashboard'])->name('techdashboard.techdashboard');
Route::get('technician/ticket_details/{id}', [TicketController::class, 'details']);
Route::get('technician/ticket_update/{id}', [TicketController::class,  'update']);

Route::get('/Techlogout', [CustomAuthController::class, 'Techlogout']);
Route::get('/Technicianlogout', [TicketController::class, 'Technicianlogout']);
Route::put('ticket-details/{id}', [TicketController::class, 'update']) ;

});



// Routes for System Admin
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::get('/sysadmindashboard', [CustomAuthController::class, 'sysadmindashboard']);
Route::get('edit/{id}', [CustomAuthController::class, 'edit']);
Route::put('update-user/{id}', [CustomAuthController::class, 'update']) ;
Route::get('delete/{id}', [CustomAuthController::class, 'delete']);





//Routes for Admin
Route::get('/Adminlogin', [CustomAuthController::class, 'admin']);
Route::post('login-admin', [CustomAuthController::class, 'loginAdmin' ])->name('login-admin');
Route::get('/admindashboard', [CustomAuthController::class, 'admindashboard']);
Route::get('/logout', [CustomAuthController::class, 'logout']);
Route::post('/register-ticket', [TicketController::class, 'registerTicket'])->name('register-ticket');




//Routes for Technician




//Login for System Admin
Route::get('/SystemAdminlogin', [CustomAuthController::class, 'Systemadmin']);
Route::post('login-system', [CustomAuthController::class, 'loginSystem' ])->name('login-system');
Route::get('/Systemlogout', [CustomAuthController::class, 'Systemlogout']);
Route::get('/ticket', [TicketController::class, 'ticket']);
Route::put('/store-comment/{id}', [TicketController::class, 'storecomment']);


//Management Login
Route::get('/Managementlogin', [CustomAuthController::class, 'management']);
Route::post('login-management', [CustomAuthController::class, 'loginManagement'])->name('login-management');
Route::get('/managementdashboard', [CustomAuthController::class, 'managementdashboard']);
Route::get('/managementlogout', [CustomAuthController::class, 'managementlogout']);
Route::get('/download-excel', [TicketController::class, 'downloadExcel'])->name('download-excel');
Route::get('/tickets/export', [TicketController::class, 'exportTicketsToExcel'])->name('tickets.export');
Route::get('/download-excel', [TicketController::class, 'download'])->name('download-excel');



Route::get('/managementdashboard/{region?}', [CustomAuthController::class, 'search'])->name('search');

Route::get('/registering', [CustomAuthController::class, 'registering']);
Route::post('/add-user', [CustomAuthController::class, 'addUser'])->name('add-user');

Route::get('send-mail', [MailController::class, 'index']);
//Testing Routes
// Route::get('/testinglogin', [CustomAuthController::class, 'testinglogin']);
// Route::get('testingregistration', [CustomAuthController::class, 'testingregistration']);

// Route::post('/testingresgister-user', [CustomAuthController::class, 'testingRegisterUser'])->name('testingresgister-user');


























