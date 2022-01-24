<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TestBase@home')->name('body');

Route::get('comic', 'TestBase@subPart')->name('comicsOne');
