<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.home');
    }
    )->name('admin.home');

    Route::get(
        '/logTicket',
        function () {
            return view('admin.logTicket');
        }
    )->name('admin.logTicket');
});
