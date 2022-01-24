<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TestBase@home')->name('body');

Route::get('comic', function () {
    return view('pages.comicsOne');
})->name('comicsOne');
