<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome2', ['users']);
});
Route::get('/', function () {
    return view('welcome2', ['users']);
});
Route::get('/', function () {
    return view('welcome3', ['users']);
});
