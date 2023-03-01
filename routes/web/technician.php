<?php
use Illuminate\Support\Facades\Route;

Route::prefix('technician')->group(function () {
    Route::get('/home', function () {
        return view('technician.home');
    }
    )->name('technician.home');
});
