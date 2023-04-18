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
                            <h1>Cart</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li><a href="shop-left-sidebar.html">Shop</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href="cart.html">Cart</a></li>
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
                                            <th class="d-none d-lg-table-cell">QUANTITY</th>
                                            <th class="d-none d-xl-table-cell">TOTAL</th>
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
                                                        <span class="sold-by">Sold By: <span>Roger Group</span> </span>
                                                        <span class="size gap-2 d-flex">Size : <span>M</span> </span>
                                                        <span class="size gap-2 d-flex d-sm-none">Price :
                                                            <span>$120.00</span> </span>
                                                        <div class="plus-minus mt-2 d-inline-flex d-lg-none">
                                                            <i class="sub" data-feather="minus"></i>
                                                            <input type="number" value="1" min="1"
                                                                max="10" />
                                                            <i class="add" data-feather="plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="price d-none d-sm-table-cell">$120.00</td>
                                            <td class="d-none d-lg-table-cell">
                                                <div class="plus-minus">
                                                    <i class="sub" data-feather="minus"></i>
                                                    <input type="number" value="1" min="1"
                                                        max="10" />
                                                    <i class="add" data-feather="plus"></i>
                                                </div>
                                            </td>
                                            <td class="total d-none d-xl-table-cell">$120.00</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="product-detail">
                                                    <img class="pr-img"
                                                        src="../assets/images/fashion/product/front/9.jpg"
                                                        alt="image" />
                                                    <div class="details">
                                                        <h4 class="title-color font-default2">Concrete Jungle Pack</h4>
                                                        <span class="sold-by">Sold By: <span>Fashion trend</span>
                                                        </span>
                                                        <span class="size gap-2 d-flex">Size : <span>Xl</span> </span>
                                                        <span class="size gap-2 d-flex d-sm-none">Price :
                                                            <span>$120.00</span> </span>
                                                        <div class="plus-minus mt-2 d-inline-flex d-lg-none">
                                                            <i class="sub" data-feather="minus"></i>
                                                            <input type="number" value="1" min="1"
                                                                max="10" />
                                                            <i class="add" data-feather="plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="price d-none d-sm-table-cell">$120.00</td>
                                            <td class="d-none d-lg-table-cell">
                                                <div class="plus-minus">
                                                    <i class="sub" data-feather="minus"></i>
                                                    <input type="number" value="1" min="1"
                                                        max="10" />
                                                    <i class="add" data-feather="plus"></i>
                                                </div>
                                            </td>
                                            <td class="total d-none d-xl-table-cell">$120.00</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="product-detail">
                                                    <img class="pr-img"
                                                        src="../assets/images/fashion/product/front/7.jpg"
                                                        alt="image" />
                                                    <div class="details">
                                                        <h4 class="title-color font-default2">Women’s long sleeve shirt
                                                        </h4>
                                                        <span class="sold-by">Sold By: <span>luisa Shop</span> </span>
                                                        <span class="size gap-2 d-flex">Size : <span>Sm</span> </span>
                                                        <span class="size gap-2 d-flex d-sm-none">Price :
                                                            <span>$120.00</span> </span>
                                                        <div class="plus-minus mt-2 d-inline-flex d-lg-none">
                                                            <i class="sub" data-feather="minus"></i>
                                                            <input type="number" value="1" min="1"
                                                                max="10" />
                                                            <i class="add" data-feather="plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="price d-none d-sm-table-cell">$120.00</td>
                                            <td class="d-none d-lg-table-cell">
                                                <div class="plus-minus">
                                                    <i class="sub" data-feather="minus"></i>
                                                    <input type="number" value="1" min="1"
                                                        max="10" />
                                                    <i class="add" data-feather="plus"></i>
                                                </div>
                                            </td>
                                            <td class="total d-none d-xl-table-cell">$120.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <div class="summery-wrap">
                            <div class="coupon-box">
                                <h5 class="cart-title">Coupon</h5>
                                <div class="text-wrap">
                                    <h4><i data-feather="tag"></i> Apply Coupon</h4>
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm">Apply</a>
                                </div>

                                <p class="content-color font-md mb-0"><a href="login.html"
                                        class="theme-color">Login</a> to see best coupon for you</p>
                            </div>
                            <div class="cart-wrap grand-total-wrap">
                                <div>
                                    <div class="order-summery-box">
                                        <h5 class="cart-title">Price Details (3 Items)</h5>
                                        <ul class="order-summery">
                                            <li>
                                                <span>Bag total</span>
                                                <span>$220.00</span>
                                            </li>

                                            <li>
                                                <span>Bag savings</span>
                                                <span class="theme-color">-$20.00</span>
                                            </li>

                                            <li>
                                                <span>Coupon Discount</span>
                                                <a href="javascript:void(0)" class="font-danger">Apply Coupon</a>
                                            </li>

                                            <li>
                                                <span>Delivery</span>
                                                <span>$50.00</span>
                                            </li>

                                            <li class="pb-0">
                                                <span>Total Amount</span>
                                                <span>$270.00</span>
                                            </li>
                                        </ul>
                                        <div class="row g-3 mt-2">
                                            <div class="col-6 col-md-12">
                                                <a href="address.html" class="btn-solid checkout-btn">Checkout <i
                                                        class="arrow"></i></a>
                                            </div>
                                            <div class="col-6 col-md-12">
                                                <a href="shop-left-sidebar.html"
                                                    class="btn-outline w-100 justify-content-center checkout-btn"> Back
                                                    To Shop </a>
                                            </div>
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
</x-layouts.app-layout>
