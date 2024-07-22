<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');
