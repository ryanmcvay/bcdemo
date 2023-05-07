<?php

use App\Http\Controllers\DiscController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/bag', function () {
    return view('bag.index');
})->name('bag');

Route::resource('disc' , DiscController::class);