<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['users']);
});
Route::get('/', function () {
    return view('welcome2', ['users']);
});
Route::get('/', function () {
    return view('welcome3', ['users']);
});
Route::get('/1', function () {
    return view('welcome4', ['users']);
});
