<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoffeeController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Показ формы входа
Route::post('/login', [LoginController::class, 'login'])->name('login-action'); // Обработка входа

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); // Показ формы регистрации
Route::post('/register', [RegisterController::class, 'register'])->name('register'); // Обработка регистрации

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/order', [CoffeeController::class, 'showOrderForm'])->name('order.form');
Route::get('/order_placed/{order}', [CoffeeController::class, 'showOrderPlaced'])->name('order_placed');
Route::post('/order', [CoffeeController::class, 'processOrder'])->name('order.processOrder');

Route::get('/order_placed', function () {
    return view('emails.order_placed');
})->name('order_placed');

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/variety', 'App\Http\Controllers\MainController@variety');

Route::get('/review', 'App\Http\Controllers\MainController@review');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');

Route::get('/place', 'App\Http\Controllers\MainController@place');

/*
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: ' . $id . ' , Name: ' . $name;
});
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});
