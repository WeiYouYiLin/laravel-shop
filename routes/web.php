<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@root')->name('root');
Auth::routes(['verify' => true]);
