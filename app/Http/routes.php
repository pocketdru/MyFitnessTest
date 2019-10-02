<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource("", "HomeController@index");
Route::resource("/users", "HomeController");


Route::resource("/meals", "MealsController");

Route::resource("/login", "LoginController");

// Route::resource("/register", "RegisterController");

// Route::get("/home", view("home/home"));