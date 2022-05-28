<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//my routes

Route::get('/routes', function () {
    echo('get');
    return view('routes');
});

Route::post('/routes', function () {
    echo('post');
    return view('routes');
});

Route::put('/routes', function () {
    echo('put');
    return view('routes');
});

Route::post('/routes', ['uses'=>'controllerExample@content']);

Route::post('/routes/catch', ['uses'=>'controllerExample@contentCatch']);

// my routes