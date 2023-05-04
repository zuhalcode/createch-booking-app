<x-layouts.app-layout>
    <x-ui.loader />

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general"></a>

    <x-app-header :slug="$slug" />

    <!-- Main Start -->
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src={{ asset('/assets/images/inner-page/banner-p.jpg') }} alt="banner" />
                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>Order</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href={{ url("/$slug") }}>Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href={{ url()->current() }}>Order</a></li>
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

                    {{-- Detail Order in lg --}}
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
                                                    <img class="pr-img" src={{ $product->image }} alt="image" />
                                                    <div class="details">
                                                        <h4 class="title-color font-default2">{{ $product->name }}</h4>
                                                        <span class="size gap-2 d-flex d-sm-none">
                                                            Price :
                                                            <span>
                                                                {{ Str::shortened_price($product->price) }}
                                                            </span>
                                                        </span>
                                                        <span class="size gap-2 d-flex">
                                                            Date : <span>23 Jan 2023</span>
                                                        </span>
                                                        <span class="size gap-2 d-flex">
                                                            Time Slot :
                                                            <span>
                                                                {{ date('h:i A', strtotime($slot->time)) }}
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="price d-none d-sm-table-cell">
                                                {{ Str::shortened_price($product->price) }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                @if (!$addons->isEmpty())
                                    <table class="table cart-table m-md-0 mt-3">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell">ADDONS</th>
                                                <th class="d-none d-sm-table-cell">PRICE</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($addons as $addon)
                                                <tr>
                                                    <td>
                                                        <div class="product-detail">
                                                            <div class="details">
                                                                <h4 class="title-color font-default2"
                                                                    style="width: 320px">
                                                                    {{ $addon->name }}
                                                                </h4>
                                                                <span class="size gap-2 d-flex d-sm-none">
                                                                    Price :
                                                                    <span>
                                                                        {{ Str::shortened_price($addon->price) }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="price d-none d-sm-table-cell">
                                                        {{ Str::shortened_price($addon->price) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- End Detail Order in lg --}}

                    {{-- Price Details --}}
                    <div class="col-md-5 col-lg-4">
                        <div class="summery-wrap">
                            <div class="cart-wrap grand-total-wrap">
                                <div>
                                    <div class="order-summery-box">
                                        <h5 class="cart-title">Price Details</h5>
                                        <ul class="order-summery">
                                            <li>
                                                <span>Item total</span>
                                                <span>{{ Str::shortened_price($total_price) }}</span>
                                            </li>

                                            <li>
                                                <span>Additional</span>
                                                <span>Rp. 250.000</span>
                                            </li>

                                            <li class="pb-0">
                                                <span>Total Amount</span>
                                                <span>{{ Str::shortened_price($total_price) }}</span>
                                            </li>
                                        </ul>
                                        <div class="row g-3 mt-2">
                                            <div class="col-6 col-md-12">
                                                @if (auth()->check())
                                                    <form action={{ url("/$slug/orders") }} id="checkout-form"
                                                        method="POST" style="cursor: pointer">
                                                        @csrf
                                                        <input type="hidden" name="total_price"
                                                            value={{ $total_price }}>
                                                        <input type="hidden" name="product_id"
                                                            value={{ $product->id }}>
                                                        <input type="hidden" name="slot_id" value={{ $slot->id }}>
                                                        @foreach ($addons as $addon)
                                                            <input type="hidden" name="addons[]"
                                                                value={{ $addon->id }}>
                                                        @endforeach

                                                        <button class="btn-solid checkout-btn">Checkout</button>
                                                        <i class="arrow"></i>
                                                    </form>
                                                @else
                                                    <div class="btn-solid checkout-btn" style="cursor: pointer"
                                                        data-bs-toggle="modal" data-bs-target="#authModal">
                                                        Checkout <i class="arrow"></i>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="col-6 col-md-12">
                                                <a href={{ url("/$slug") }}
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
                    {{-- End Price Details --}}
                </div>
        </section>
        <!-- Cart Section End -->
    </main>
    <!-- Main End -->

    <!-- Auth Modal Start -->
    <div class="modal fade addnew-address" id="authModal" tabindex="-1" aria-labelledby="addNewAddressLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewAddressLabel">Sign into your Account</h5>
                    <span class="close-modal" data-bs-dismiss="modal"><i data-feather="x"></i></span>
                </div>

                <div class="modal-body full-grid-mobile">
                    <section class="page-body p-0">
                        <div class="row g-0 ratio_asos">
                            <div class="order-2 order-lg-1 col-lg-12">
                                <div class="content-box">
                                    {{-- Login --}}
                                    <div id="login-modal">
                                        <h5>LOGIN <span class="bg-theme-blue"></span></h5>
                                        <p class="font-md content-color">
                                            How do i get access order,wishlist and recomendation ?
                                        </p>

                                        <form method="POST" action={{ url("/$slug/login-modal") }}
                                            class="custom-form form-pill">
                                            @csrf
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
                                            <div>
                                                <button type="submit" class="btn-solid rounded-pill line-none">
                                                    Signin<i class="arrow"></i>
                                                </button>
                                            </div>
                                        </form>

                                        <span class="backto-link font-default content-color text-decoration-none">
                                            If you are new,
                                            <p class="text-decoration-underline theme-color" style="cursor: pointer;"
                                                onclick="handleChangeContent()">
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
                                    {{-- Login --}}

                                    {{-- Register --}}
                                    <div id="register-modal" class="d-none">
                                        <h5>CREATE ACCOUNT<span class="bg-theme-blue"></span></h5>
                                        <p class="font-md content-color">How do i get access order,wishlist and
                                            recommendation ?</p>

                                        <form action={{ url("/$slug/register-modal") }} class="custom-form form-pill"
                                            method="POST">
                                            @csrf
                                            <div class="input-box">
                                                <label for="name">Full Name</label>
                                                <input class="form-control" type="text" required name="name"
                                                    id="name" />
                                            </div>
                                            <div class="input-box">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" required name="email"
                                                    id="email" />
                                            </div>
                                            <div class="input-box">
                                                <label for="phone">WhatsApp Number</label>
                                                <input class="form-control" type="phone" required name="phone"
                                                    id="phone" />
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

                                            <button type="submit"
                                                class="btn-solid rounded-pill line-none theme-color">
                                                SignUp <i class="arrow"></i>
                                            </button>
                                        </form>

                                        <span class="backto-link font-default content-color text-decoration-none">
                                            Already have an Account?
                                            <span class="text-decoration-underline theme-color"
                                                style="cursor: pointer" onclick="handleChangeContent()">
                                                Sign In
                                            </span>
                                        </span>
                                        <span class="line"><span>Or</span></span>
                                        <a href="https://www.google.com/" class="button-link">
                                            <img src={{ asset('/assets/icons/png/google.png') }} alt="google" />
                                            Sign up
                                        </a>
                                    </div>
                                    {{-- Register --}}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="modal-footer">
                    <div class="btn-box">
                        <button type="button" class="btn btn-outline rounded-pill" data-bs-dismiss="modal"
                            aria-label="Close">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Auth Modal End -->
</x-layouts.app-layout>
