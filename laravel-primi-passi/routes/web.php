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
    $data = [
        "hi" => "Hello World!",
        "src" => "https://c.tenor.com/V4jrINyqhGcAAAAi/dance-dancing.gif"
    ];
    return view('home', $data);
});
