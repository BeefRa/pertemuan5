<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mhs','MhsController');
Route::resource('dosen','DosenController');
