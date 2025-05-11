<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route qui affiche Bonjour
Route::get('/bonjour',function(){return "Bonjour";});