<?php

use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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

Route::controller(ProductController::class)->group(fn() => [
    Route::get('/products/{id}', 'indexById'),
]);

Route::controller(OrderController::class)->group(fn() => [
    Route::get('/products/{id}/order', 'orderIndex'),
    Route::get('/order-success', 'orderSuccessIndex')->middleware('auth'),
    Route::get('/order', 'payment')
]);

// Handling for Authentication
Route::controller(AuthController::class)->group(fn() => [
    Route::prefix('auth')->group(fn() => [
        Route::get('/login', fn() => view('auth.login'))->name('login')->middleware('guest'),
        Route::post('/login', 'login'),
        
        Route::get('/register', fn() => view('auth.register'))->middleware('guest'),
        Route::post('/register', 'register'),
    
        Route::post('/logout', 'logout'),
    ]),

    // Handling for authentication form in modal
    Route::post('/login-modal', 'loginModal'),
    Route::post('/register-modal', 'registerModal'),
]);

// Handling for Dashboard
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/order-detail', fn() => view('dashboard.order-detail'));

    Route::group([], function () {
        Route::get('/', function () {
            return view('dashboard.index');
        });

        Route::controller(HomepageController::class)->group(fn() => [
            Route::get('/landing-page', 'showLandingPageForm'),
            Route::put('/landing-page', 'createCover')
        ]);

        Route::get('/branches', function () {
            return view('dashboard.branches');
        });

        Route::get('/company', function () {
            return view('dashboard.company');
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
    })->middleware(['admin', 'super-admin']);

    Route::middleware('super-admin')->group(function () {});
});

