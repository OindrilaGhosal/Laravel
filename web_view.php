<?php
Route::get('/', function() {
    return view('welcome');

});

Route::get('/contact', function() {
    return view('contact');

});