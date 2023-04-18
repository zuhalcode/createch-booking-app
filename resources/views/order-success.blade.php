<x-layouts.app-layout>
    <x-ui.loader />

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general"></a>

    <x-app.header />

    <!-- Main Start -->
    <main class="main">
        <!-- Top Section Start -->
        <section class="p-0">
            <div class="success-icon">
                <div class="img-wrap">
                    <img class="success-img img-fluid"
                        src="https://themes.pixelstrap.com/oslo/assets/svg/order-success.svg" alt="vector" />
                    <img class="check" src="https://themes.pixelstrap.com/oslo/assets/svg/check.svg" alt="check" />
                </div>

                <div class="success-contain">
                    <h1>Order Success</h1>
                    <h5 class="font-light">Payment Is Successfully Processsed And Your Order Is On The Way</h5>
                    <h6 class="font-light">Transaction ID:267676GHERT105467</h6>
                </div>
            </div>
        </section>
        <!-- Top Section End -->

        <!-- Compare Section Start -->
        <section class="section-b-space order-success">
            <div class="container-lg">
                <div class="row g-3 g-md-4 cart">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="summery-box">
                            <div class="row g-3 g-lg-4">
                                <div class="col-12">
                                    <div class="summery-wrap">
                                        <div class="cart-wrap grand-total-wrap">
                                            <div>
                                                <div class="order-summery-box">
                                                    <h5 class="cart-title">Detail Harga (3 Items)</h5>
                                                    <ul class="order-summery">
                                                        <li>
                                                            <span>item 1</span>
                                                            <span>$220.00</span>
                                                        </li>

                                                        <li>
                                                            <span>ADD ONS</span>
                                                            <span class="font-danger">$100.00</span>
                                                        </li>

                                                        <li>
                                                            <span>Biaya Total</span>
                                                            <span>$50.00</span>
                                                        </li>

                                                        <li class="pb-0">
                                                            <span>Total Amount</span>
                                                            <span>$270.00</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="summery2">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="order-summery-box">
                                                    <h5 class="cart-title">Shipping Address</h5>
                                                </div>
                                                <ul>
                                                    <li>Greg Harrell</li>
                                                    <li>568, Suite Ave.</li>
                                                    <li>Australia, 235153,brooklyn brigs</li>
                                                    <li>Contact No. 48465465465</li>
                                                </ul>
                                            </div>

                                            <div class="col-12">
                                                <div class="delivery-box">
                                                    <p class="d-flex flex-column g-0 title-color font-md mb-0">
                                                        Expected Date Of Delivery:
                                                        <strong> June 22, 2022</strong>
                                                    </p>
                                                    <a href="user-dashboard.html"
                                                        class="font-danger font-md fw-500">Track Order</a>
                                                </div>
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
        <!-- Compare Section End -->
    </main>
    <!-- Main End -->
</x-layouts.app-layout>
