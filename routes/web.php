<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Home']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['name' => 'About']);
})->name('about');
Route::get('/contact', function (){
    return view('contact', ['name' => 'Contact']);
})->name('contact');