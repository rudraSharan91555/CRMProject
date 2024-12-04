<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard Php
Route::get('/admin', function () {
    return view('admin.dashboard');
});