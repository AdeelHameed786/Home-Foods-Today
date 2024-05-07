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
Route::get('restaurant-details', function () {
    return view('restaurant_details');
})->name('restaurant-details');
Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('create-an-account', function () {
    return view('create_an_account');
})->name('create-an-account');
Route::get('log-in', function () {
    return view('log_in');
})->name('log-in');
Route::get('profile', function () {
    return view('profile');
})->name('profile');
Route::get('favourites', function () {
    return view('favourites');
})->name('favourites');
Route::get('get-location', function () {
    return view('get_location');
})->name('get-locaation');
