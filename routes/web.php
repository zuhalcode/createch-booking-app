<?php

use App\Http\Controllers\AuthController;
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


Route::get('/', fn () => view('welcome'));
Route::get('/products/{id}', fn () => view('product-detail'));
Route::get('/orders', fn () => view('order-detail'));

Route::prefix('auth')->group(fn() => [
    Route::get('/login', fn() => view('auth.login'))->name('login'),
    Route::post('/login', [AuthController::class, 'login']),
    
    Route::get('/register', fn() => view('auth.register')),
    Route::post('/register', [AuthController::class, 'register']),

    Route::post('/logout', [AuthController::class, 'logout']),
]);

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->middleware('auth');

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

