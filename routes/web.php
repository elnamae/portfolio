<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');

});
Route::get('/about', function(){
//return ('this is about page');
    return('this is about page');

});
Route::get('/product', function(){

    return view('product', ['name' => 'Shoes']);

});

Route::get('name/{name}s', function($name){
    return ('My name is'. $name);
});

Route::get('/portfolio', function (){
    return view('portfolio');

});
