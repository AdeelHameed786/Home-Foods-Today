<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('delivery', function () {
    return view('delivery');
})->name('delivery');
Route::get('pick-up', function () {
    return view('pick_up');
})->name('pick-up');
Route::get('restaurants', function () {
    return view('restaurants');
})->name('restaurants');
