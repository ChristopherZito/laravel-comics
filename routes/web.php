<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.body');
})->name('body');
Route::get('comic', function () {
    return view('pages.comicsOne');
})->name('comicsOne');
