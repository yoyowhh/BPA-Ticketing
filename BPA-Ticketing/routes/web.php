<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lengkapi-identitas', function () {
    return view('identitas');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/admin/login', function () {
    return view('admin-login');
});