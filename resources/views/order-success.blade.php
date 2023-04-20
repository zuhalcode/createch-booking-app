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

        <!-- Invoice -->
        <section class="p-3 mt-2">
            <div class="row g-3 g-lg-4 summery-wrap">
                <div class="col-10 mx-auto success-icon rounded-3 d-flex flex-column gap-3 cart-wrap grand-total-wrap">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-3">
                            <div>
                                <img style="height: 50px; width: 120px"
                                    src={{ asset('/assets/images/logos/logo-4.png') }} alt="logo" />
                            </div>
                            <div class="d-flex flex-column success-contain">
                                <h1>Dipa In House</h1>
                                <h5 class="font-light text-start">zuhal@gmail.com</h5>
                            </div>
                        </div>

                        <div class="d-flex flex-column success-contain font-light text-end text-capitalize">
                            <h5>Ijen Boulevard Street 1001</h5>
                            <h5>Malang city, 65572</h5>
                            <h5>East java, Indonesia</h5>
                        </div>
                    </div>

                    <div class="d-flex p-3 rounded-3 justify-content-between bg-white mt-2">
                        <div class="d-flex flex-column gap-2">
                            <h5>Invoice Number</h5>
                            <h5>INV-2022-101</h5>
                            <h5>Issued date: 11 Jan 2022</h5>
                            <h5>Expires date: 18 Jan 2022</h5>
                        </div>

                        <div class="d-flex flex-column gap-2">
                            <h5>Billed to</h5>
                            <h5>Jasmine Sarah</h5>
                            <h5>Moonlight Agency LTD</h5>
                            <h5>New York, USA</h5>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div class="order-summery-box">
                            <h5 class="cart-title">Detail Harga</h5>
                            <ul class="order-summery">
                                <li>
                                    <span>Barber Light</span>
                                    <span>Rp. 220.000</span>
                                </li>

                                <li>
                                    <span>Pomade</span>
                                    <span class="font-danger">Rp. 10.000</span>
                                </li>

                                <li>
                                    <span>Biaya Total</span>
                                    <span>Rp. 5.000</span>
                                </li>

                                <li class="pb-0">
                                    <span class="font-weight-bold">Total Amount</span>
                                    <span>Rp. 270.000</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-3 mx-auto">
                        {{ $barcode }}
                    </div>
                </div>
            </div>
        </section>
        <!-- Invoice End -->
    </main>
    <!-- Main End -->
</x-layouts.app-layout>
