<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('stage');
});

Route::get('/stage', function(){
    return view('stage');
});

Route::get('/production', function(){
    return view('production');
});

Route::get('/deliveries', function(){
    return view('deliveries');
});

Route::get('/part_search', function(){
    return view('part_search');
});

Route::get('/materials', function(){
    return view('materials');
});

Route::get('/follow-up', function(){
    return view('follow-up');
});

Route::get('/return_forms', function(){
    return view('return_forms');
});

Route::get('/vendors', function(){
    return view('vendors');
});
