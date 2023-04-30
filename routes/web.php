<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\User\OrderController as UserOrderController;
use App\Http\Controllers\Admin\CompanyController as AdminCompanyController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\SuperAdmin\CompanyController as SuperAdminCompanyController;

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

Route::controller(UserOrderController::class)->group(fn() => [
    Route::get('/products/{id}/order', 'orderIndex'),
    // Route::get('/order', 'payment'),
    Route::post('/orders', 'createOrder'),
    Route::get('/order-success', 'orderSuccessIndex')->middleware('auth'),
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

    // Handling Dashboard for Customer
    Route::get('/order-detail', fn() => view('dashboard.order-detail'));

    // Handling Dashboard for Admin
    Route::group([], function () {
        Route::get('/', function () {
            return view('dashboard.index');
        });

        Route::controller(AdminCompanyController::class)->group(fn() => [
            Route::get('/landing-page', 'editLandingPage'),
            Route::put('/landing-page', 'updateLandingPage'),
            Route::get('/company', 'editCompany'),
            Route::put('/company/{id}', 'updateCompany'),
        ]);

        Route::resource('/branches', BranchController::class);
        Route::resource('/products', AdminProductController::class);

        Route::controller(SlotController::class)->group(fn() => [
            Route::get('/slots', 'indexSlotManagement'),
            Route::post('/slots/create', 'createSlot'),
        ]);

        Route::get('/order-management', function () {
            return view('dashboard.orders');
        });

        Route::get('/bookings', function () {
            return view('dashboard.bookings');
        });
    })->middleware(['admin', 'super-admin']);

    // Handling Dashboard for Super Admin
    Route::middleware('super-admin')->group(function () {
        Route::controller(SuperAdminCompanyController::class)->group(fn() => [
            Route::get('/companies', 'indexCompany'),
            Route::post('/companies', 'createCompany'),
            Route::post('/companies/{id}', 'getCompanyById'),
            Route::post('/companies/{id}/edit', 'editCompanyById'),
            Route::delete('/companies/{id}', 'destroy'),
        ]);
    });
});