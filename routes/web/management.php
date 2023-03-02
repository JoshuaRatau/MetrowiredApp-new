<?php
use Illuminate\Support\Facades\Route;

Route::prefix('management')->group(function () {


    Route::get('/home',
        function () {
            return view('management.home');
        }
    )->name('management.home');

    Route::get('/dashboard',
        function () {
            return view('management.management_dashboard');
        }
    )->name('management.management_dashboard');

});
