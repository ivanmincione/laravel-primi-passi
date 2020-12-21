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
    return view('welcome');
});

Route::get('home-page', function () {
    return view('home');
})->name("home-page");

Route::get('users-page', function () {
    $data = [
        "users" => [
            "Topolino",
            "Paperino",
            "Pippo",
            "Pluto",
            "Paperone",
            "Minnie",
            "Paperone"
        ],
    ];
    return view('users', $data);
})->name("users-page");
