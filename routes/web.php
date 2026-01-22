<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/db-test', function () {
    return DB::connection()->getPdo() ? "DB Connected" : "Failed";
});

