<?php
use Illuminate\Support\Facades\Route;

Route::prefix('technician')->group(function () {
    Route::get('/home', function () {
        return view('technician.home');
    }
    )->name('technician.home');


    Route::get('/ticketDetails', function () {
        return view('technician.ticket_details');
    }
    )->name('technician.ticket_details');


    Route::get('/ticketUpdate', function () {
        return view('technician.update_ticket');
    }
    )->name('technician.update_ticket');


    Route::get('/ticketComplete', function () {
        return view('technician.complete');
    }
    )->name('technician.complete');


});
