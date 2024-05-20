<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    // return view('welcome');

    return view('pages.auth-login', ['type_menu' => '']);
});

Route::get('/register', function () {
    // return view('welcome');

    return view('pages.auth-register', ['type_menu' => '']);
});

Route::get('/dashboard', function () {
    // return view('welcome');

    return view('pages.app.dashboard-simpadu', ['type_menu' => '']);
});

Route::get('/forgot', function () {
    // return view('welcome');

    return view('pages.auth-forgot-password', ['type_menu' => '']);
});

Route::get('/reset', function () {
    // return view('welcome');

    return view('pages.auth.auth-reset-password', ['type_menu' => '']);
});