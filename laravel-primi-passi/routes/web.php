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
|https://c.tenor.com/6T7E2IXtN7MAAAAi/rotating-frog-frog.gif
*/

Route::get('/', function () {
    $data = [
        "hi" => "Hello World!",
        "src" => "https://c.tenor.com/V4jrINyqhGcAAAAi/dance-dancing.gif",
        "alt" =>"happy doggo",
        "title" => "This is a happy doggo!"
    ];
    return view('home', $data);
})-> name("land-here");

Route::get('/froggo', function () {
    $data = [
        "hi" => "Hello Froggos!",
        "src" => "https://c.tenor.com/6T7E2IXtN7MAAAAi/rotating-frog-frog.gif",
        "alt" =>"happy froggo",
        "title" => "This is a happy froggo!"
    ];
    return view('froggo', $data);
})-> name("to-froggo");

Route::get('/catto', function () {
    $data = [
        "hi" => "Hello Cattos!",
        "src" => "https://c.tenor.com/LprOawAyQnEAAAAi/dance-happy.gif",
        "alt" =>"happy cattos",
        "title" => "This is a happy catto!"
    ];
    return view('catto', $data);
})-> name("to-catto");

Route::get('/birbo', function () {
    $data = [
        "hi" => "Hello Birbos!",
        "src" => "https://c.tenor.com/TU0CaM5yba8AAAAC/bird.gif",
        "alt" =>"happy birbos",
        "title" => "These are some happy birbos!"
    ];
    return view('birbo', $data);
})-> name("to-birbo");