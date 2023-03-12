<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/bag', function () {
    return view('bag.index');
})->name('bag');

Route::get('/disc', function () {
    return view('disc.index');
})->name('disc');