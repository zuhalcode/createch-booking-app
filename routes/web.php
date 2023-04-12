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

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });

    Route::get('/landing-page', function () {
        return view('dashboard.landing-pages');
    });

    Route::get('/branches', function () {
        return view('dashboard.branches');
    });

    Route::get('/products', function () {
        return view('dashboard.products');
    });

    Route::get('/orders', function () {
        return view('dashboard.orders');
    });

    Route::get('/bookings', function () {
        return view('dashboard.bookings');
    });
});

