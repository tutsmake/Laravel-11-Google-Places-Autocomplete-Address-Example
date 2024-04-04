<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AddressController;
Route::get('address', [AddressController::class, 'index']);