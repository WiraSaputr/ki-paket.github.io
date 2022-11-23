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
    return view('aplication/homepage', [
        "title" => "home"
    ]);
});

Route::get('/list', function () {
    return view('aplication/list', [
        "title" => "list"
    ]);
});

Route::get('/jobs', function () {
    return view('aplication/jobs', [
        "title" => "jobs"
    ]);
});

Route::get('/link', function () {
    return view('aplication/link', [
        "title" => "link"
    ]);
});

Route::get('/artikel', function () {
    return view('aplication/artikel', [
        "title" => "artikel"
    ]);
});
