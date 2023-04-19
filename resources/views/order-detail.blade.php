<x-layouts.app-layout>
    <x-ui.loader />

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general"></a>

    <x-app.header />

    <!-- Main Start -->
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src="../assets/images/inner-page/banner-p.jpg" alt="banner" />
                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>Order</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href="cart.html">Order</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Cart Section Start -->
        <section class="section-b-space card-page">
            <div class="container-lg">
                <div class="row g-3 g-md-4 cart">
                    <div class="col-md-7 col-lg-8">
                        <div class="cart-wrap">
                            <div class="items-list">
                                <table class="table cart-table m-md-0">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-sm-table-cell">PRODUCT</th>
                                            <th class="d-none d-sm-table-cell">PRICE</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-detail">
                                                    <img class="pr-img"
                                                        src="../assets/images/fashion/product/front/8.jpg"
                                                        alt="image" />
                                                    <div class="details">
                                                        <h4 class="title-color font-default2">Concrete Jungle Pack</h4>
                                                        <span class="size gap-2 d-flex d-sm-none">
                                                            Price : <span>Rp. 120.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="price d-none d-sm-table-cell">Rp. 120.000</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table cart-table m-md-0 mt-3">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-sm-table-cell">ADDONS</th>
                                            <th class="d-none d-sm-table-cell">PRICE</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-detail">
                                                    <div class="details">
                                                        <h4 class="title-color font-default2">Pomade</h4>
                                                        <span class="size gap-2 d-flex d-sm-none">
                                                            Price : <span>Rp. 12.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="price d-none d-sm-table-cell">Rp. 120.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="summery-wrap">
                            <div class="cart-wrap grand-total-wrap">
                                <div>
                                    <div class="order-summery-box">
                                        <h5 class="cart-title">Price Details</h5>
                                        <ul class="order-summery">
                                            <li>
                                                <span>Item total</span>
                                                <span>Rp. 200.000</span>
                                            </li>

                                            <li>
                                                <span>Additional</span>
                                                <span>Rp. 250.000</span>
                                            </li>

                                            <li class="pb-0">
                                                <span>Total Amount</span>
                                                <span>Rp. 750.000</span>
                                            </li>
                                        </ul>
                                        <div class="row g-3 mt-2">
                                            <div class="col-6 col-md-12">
                                                @if (auth()->check())
                                                    <div class="btn-solid checkout-btn" id="pay-button"
                                                        style="cursor: pointer">
                                                        Checkout <i class="arrow"></i>
                                                    </div>
                                                @else
                                                    <div class="btn-solid checkout-btn" style="cursor: pointer"
                                                        data-bs-toggle="modal" data-bs-target="#addNewAddress">
                                                        Checkout <i class="arrow"></i>
                                                    </div>
                                                @endif

                                            </div>
                                            <div class="col-6 col-md-12">
                                                <a href={{ url('/') }}
                                                    class="btn-outline w-100 justify-content-center checkout-btn">
                                                    Back To Home
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Cart Section End -->
    </main>
    <!-- Main End -->

    <!-- Address Modal Start -->
    <div class="modal fade addnew-address" id="addNewAddress" tabindex="-1" aria-labelledby="edditAddressLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body full-grid-mobile">
                    <!-- Main Start -->
                    <div class="main">
                        <section class="page-body p-0">
                            <div class="row g-0 ratio_asos">
                                <div class="order-2 order-lg-1 col-lg-12">
                                    <div class="content-box">
                                        <div>
                                            <h5>LOGIN <span class="bg-theme-blue"></span></h5>
                                            <p class="font-md content-color">
                                                How do i get access order,wishlist and recomendation ?
                                            </p>

                                            <div class="custom-form form-pill">
                                                <div class="input-box">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" type="email" required name="email"
                                                        id="email" />
                                                </div>

                                                <div class="input-box">
                                                    <label for="password">Password</label>
                                                    <div class="icon-input">
                                                        <input class="form-control" type="password" required
                                                            name="password" id="password" />
                                                        <img class="showHidePassword"
                                                            src="https://themes.pixelstrap.com/oslo/assets/icons/svg/eye-1.svg"
                                                            alt="eye" />
                                                    </div>
                                                </div>

                                                <a class="forgot-link" href="forgot-password.html">
                                                    Forgot Password ?
                                                </a>

                                                {{-- Midtrans Snap Button --}}
                                                <div>
                                                    <input type="hidden" id="client_token"
                                                        value="{{ $payment_token }}">
                                                    <button type="submit" id="pay-button"
                                                        class="btn-solid rounded-pill line-none">
                                                        Signin<i class="arrow"></i>
                                                    </button>
                                                </div>
                                                {{-- Midtrans Snap Button --}}
                                            </div>

                                            <span class="backto-link font-default content-color text-decoration-none">
                                                If you are new,
                                                <p class="text-decoration-underline theme-color"
                                                    style="cursor: pointer;">
                                                    Create Now
                                                </p>
                                            </span>
                                            <span class="line"><span>Or</span></span>

                                            <div class="link-group">
                                                <a href="https://www.google.com/" class="button-link"><img
                                                        src={{ url('/assets/icons/png/google.png') }} alt="google" />
                                                    Sign in
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Main End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Address Modal End -->



</x-layouts.app-layout>
