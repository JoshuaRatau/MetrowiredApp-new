<?php
use Illuminate\Support\Facades\Route;

Route::prefix('management')->group(function () {


    Route::get('/home',
        function () {
            return view('management.home');
        }
    )->name('management.home');

  

});
