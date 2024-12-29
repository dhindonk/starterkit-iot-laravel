<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

// middleware login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
});
