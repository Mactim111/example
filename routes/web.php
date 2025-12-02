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


Route::get('/1', function () {
    return view('welcome5', ['users']);
});
Route::get('/1', function () {
    return view('welcome6', ['users']);
});
Route::get('/1', function () {
    return view('welcome7', ['users']);
});
