<?php

use App\Http\Controllers\Sample1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// resource route
Route::resource("sample1", Sample1Controller::class);
