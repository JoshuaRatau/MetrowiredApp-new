<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.home');
    }
    )->name('admin.home');

    Route::get('/logtickets',
        function () {return view('admin.logtickets');}
    )->name('admin.logtickets');


    Route::get('/dashboard', function() {
        return view('admin.admin_dashboard');
    }
    )->name('admin.admin_dashboard');
 
});
