<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');