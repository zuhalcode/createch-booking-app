<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\Admin\CompanyController as AdminCompanyController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\CustomerController;
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

Route::prefix('/{slug}')->group(fn () => [
    Route::get('/tes/{id}', [CustomerController::class, 'showProduct']),

    // Handling for Customer Page
    Route::controller(CustomerController::class)->group(fn () => [
        Route::get('/', 'index'),
        Route::get('/products/{id}', 'showProduct'),
        Route::get('/products/{id}/order', 'showOrder'),

        Route::get('/orders/detail', 'redirectToOrderDetail'),
        Route::post('/orders', 'storeOrder'),

        Route::get('/invoices', 'indexInvoice')->middleware('auth'),
        Route::get('/invoices/{id}', 'showInvoice')->middleware('auth'),
    ]),

    // Handling for Authentication
    Route::controller(AuthController::class)->group(fn () => [
        Route::prefix('/auth')->group(fn () => [
            Route::get('/login', 'indexLogin')->name('login')->middleware('guest'),
            Route::post('/login', 'login'),

            Route::get('/register', 'indexRegister')->middleware('guest'),
            Route::post('/register', 'register'),

            Route::post('/logout', 'logout')->name('logout'),
        ]),

        // Handling for authentication form in modal
        Route::post('/login-modal', 'loginModal'),
        Route::post('/register-modal', 'registerModal'),
    ]),

    // Handling for Dashboard
    Route::prefix('/dashboard')->middleware(['auth', 'checkCompanyRegistration'])->group(fn () => [

        // Handling Dashboard for Admin
        Route::group([], fn () => [
            Route::controller(AdminCompanyController::class)->group(fn () => [
                // Handle Dashboard
                Route::get('/', 'indexDashboard'),

                // Handle Landing Page
                Route::get('/landing-page', 'editLandingPage'),
                Route::put('/landing-page', 'updateLandingPage'),

                // Handle Company
                Route::get('/company', 'editCompany'),
                Route::put('/company/{id}', 'updateCompany'),

                // Handle Branches
                Route::get('/branches', 'indexBranch'),
                Route::get('/branches/create', 'createBranch'),
                Route::post('/branches', 'storeBranch'),
                Route::get('/branches/{branchId}/products', 'showBranchProducts'),
                Route::get('/branches/{branchId}/edit', 'editBranch'),
                Route::put('/branches/{branchId}', 'updateBranch'),

                // Handle Orders
                Route::get('/orders', 'indexOrder'),

            ]),

            Route::resource('/products', AdminProductController::class),
            Route::post('/products/branches/{branchId}', [AdminProductController::class, 'storeBranchProducts']),
            Route::delete('/products/branches/{branchId}', [AdminProductController::class, 'destroyBranchProduct']),

            Route::controller(SlotController::class)->group(fn () => [
                Route::get('/slots', 'createSlot'),
                Route::post('/slots', 'storeSlot'),
            ]),
        ])->middleware(['admin-company', 'admin-branch', 'super-admin']),

        // Handling Dashboard for Super Admin
        Route::middleware('super-admin')->group(function () {
            Route::controller(SuperAdminCompanyController::class)->group(fn () => [
                // Handle Administrators 
                Route::get('/users', 'indexUser'),
                Route::post('/users', 'storeUser'),
                Route::put('/users/{userId}', 'updateUser'),

                // Handle Companies 
                Route::get('/companies', 'indexCompany'),
                Route::post('/companies', 'storeCompany'),
                Route::put('/companies/{id}', 'updateCompany'),
                Route::delete('/companies/{id}', 'destroyCompany'),
            ]);
        }),
    ]),
]);
