<?php

use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderController;

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


Route::get('/', [HomepageController::class, 'index']);
Route::get('/tes', fn () => view('tes'));
Route::get('/products/{id}', fn () => view('product-detail'));
Route::get('/orders', [OrderController::class, 'payment']);
Route::get('/order-success', [OrderController::class, 'orderSuccessIndex'])->middleware('auth');
Route::post('/login-modal', [AuthController::class, 'loginModal']);
Route::post('/register-modal', [AuthController::class, 'registerModal']);

Route::prefix('auth')->group(fn() => [
    Route::get('/login', fn() => view('auth.login'))->name('login')->middleware('guest'),
    Route::post('/login', [AuthController::class, 'login']),
    
    Route::get('/register', fn() => view('auth.register'))->middleware('guest'),
    Route::post('/register', [AuthController::class, 'register']),

    Route::post('/logout', [AuthController::class, 'logout']),
]);

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/order-detail', fn() => view('dashboard.order-detail'));

    Route::middleware('admin')->group(function () {
        Route::get('/', function () {
            return view('dashboard.index');
        });

        Route::get('/landing-page', [HomepageController::class, 'showLandingPageForm']);
        Route::get('/landing-page-cover', [HomepageController::class, 'showCover']);
        Route::put('/landing-page', [HomepageController::class, 'createCover']);

        Route::get('/branches', function () {
            return view('dashboard.branches');
        });

        Route::get('/company', function () {
            return view('dashboard.branches');
        });

        Route::get('/products', function () {
            return view('dashboard.products');
        });

        Route::get('/order-management', function () {
            return view('dashboard.orders');
        });

        Route::get('/bookings', function () {
            return view('dashboard.bookings');
        });
    });
});

