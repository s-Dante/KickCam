<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('welcome');

Route::get('/login', function () {
    return Inertia::render('auth/Login', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('login');

Route::get('/signin', function () {
    return Inertia::render('auth/Login', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('signin');

Route::get('/email-resertPswd', function () {
    return Inertia::render('auth/password/Email', [
        //'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('email-resetPswd');

Route::get('/confirm-resetPswd', function () {
    return Inertia::render('auth/password/Confirm', [
        //'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('confirm-resetPswd');

Route::get('/reset-resetPswd', function () {
    return Inertia::render('auth/password/Reset', [
        //'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('reset-resetPswd');


require __DIR__.'/settings.php';
