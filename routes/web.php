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

Route::get('contact-page', function () {
    $data = [
        "tel" => "000222333",
        "country" => "Italy",
        "city" => "Roma",
        "address" => "Via Pinco Pallino"
    ];
    return view('contact', $data);
})->name("contact-page");

Route::get('about-page', function () {
    $data = [
        "info" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    ];
    return view('about', $data);
})->name("about-page");
