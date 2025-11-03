<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware('auth')->group(function () {

    Route::get('/admin-dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard')->middleware('check.admin');

    Route::get('/customer-dashboard', function () {
        return view('customer.index');
    })->name('customer.dashboard');
});

require __DIR__.'/authorization.php';
