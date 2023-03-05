<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagController;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/a', function () {
    $links = collect([
        ['name' => 'Food', 'url' => '#'],
        ['name' => 'Toys', 'url' => '#'],
        ['name' => 'Vaccines', 'url' => '#'],
        ['name' => 'Family', 'url' => '#'],
        ['name' => 'Friends', 'url' => '#'],
    ]);
    return view('landing', compact('links'));
})->name('landing');

Route::get('/bag', BagController::class)->name('bag');

Route::get('/disc', function () {
    return view('disc.index');
})->name('disc');
