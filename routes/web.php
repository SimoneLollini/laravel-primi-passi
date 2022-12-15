<?php

use Illuminate\Support\Facades\Route;

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
    $hello_world = 'Hello World!';
    return view('home', compact('hello_world'));
});

Route::get('/about', function () {
    $hello_world_about = 'Hello world about!';
    return view('about', compact('hello_world_about'));
});
