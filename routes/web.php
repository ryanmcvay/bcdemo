<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagController;
use App\Http\Controllers\DiscController;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::resource('disc', DiscController::class);



Route::get('/bag', BagController::class)->name('bag');

Route::view('/bofa', 'spoof');