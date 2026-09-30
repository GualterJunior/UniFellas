<?php
use Illuminate\Support\Facades\Route;
Route::view('/', 'app')->name('home');
Route::view('/app', 'app')->name('app');
