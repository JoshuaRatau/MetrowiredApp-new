<?php

// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Route as FacadesRoute;

// Route::prefix('super/admin/')->group(function () {
//     Route::get('/home', function () {
//         return view('super_admin.home');
//     }
//     )->name('super_admin.home');

// });

use Illuminate\Support\Facades\Route;

Route::prefix('system/admin/')->group(function () {

    Route::get('/home', function () {
        return view('system_admin.home');
    }
    )->name('system_admin.home');

    Route::get('/dashboard', function () {
        return view('system_admin.system_admin_dashboard');
    }
    )->name('system_admin.system_admin_dashboard');

    Route::get('/addUser', function () {
        return view('system_admin.addUser');
    }
    )->name('system_admin.addUser');


});
