<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagController;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/bag', BagController::class)->name('bag');

Route::get('/disc', function () {
    return view('disc.index');
})->name('disc');
