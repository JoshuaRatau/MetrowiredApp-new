<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.home');
    }
    )->name('admin.home');

    Route::get('/dashboard',
        function () {return view('admin.dashboard');}
    )->name('admin.dashboard');


    Route::get('/admin_dashboard', function() {
        return view('admin.admin_dashboard');
    }
    )->name('admin.admin_dashboard');
 
});
