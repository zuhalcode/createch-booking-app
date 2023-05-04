<x-layouts.app-layout>
    <x-ui.loader />

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general"></a>

    <x-app-header :slug="$slug" />

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
                    <h6 class="font-light">Transaction ID:{{ $order->id }}</h6>
                </div>
            </div>
        </section>
        <!-- Top Section End -->

        <!-- Invoice -->
        <section class="p-3 mt-2">
            <div class="row g-3 g-lg-4 ms-2 summery-wrap">
                <div class="col-8 mx-auto success-icon rounded-3 d-flex flex-column gap-3 cart-wrap grand-total-wrap">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-3">
                            <div>
                                <img style="height: 50px; width: 120px"
                                    src={{ asset('/assets/images/logos/logo-4.png') }} alt="logo" />
                            </div>
                            <div class="d-flex flex-column success-contain">
                                <h1 class="text-start">{{ $company->name }}</h1>
                                <h5 class="font-light text-start">{{ $company->email }}</h5>
                            </div>
                        </div>

                        <div class="d-flex flex-column success-contain font-light text-end text-capitalize">
                            <h5>{{ $company->address }}</h5>
                            <h5>{{ $company->city->name }}</h5>
                            <h5>{{ $company->city->province->name }}</h5>
                        </div>
                    </div>

                    <div class="d-flex p-3 rounded-3 justify-content-between text-white mt-2"
                        style="background-color: #c69057">
                        <div class="d-flex flex-column gap-2">
                            <h5><b>Invoice Number</b></h5>
                            <h5>INV-2022-{{ $order->id }}</h5>
                            <h5>Issued date: {{ $order->created_at->format('j M Y') }}</h5>
                            <h5>Expires date: 18 Jan 2022</h5>
                        </div>

                        <div class="d-flex flex-column gap-2">
                            <h5>Billed to</h5>
                            <h5>{{ $order->user->name }}</h5>
                            {{-- <h5>Moonlight Agency LTD</h5> --}}
                            <h5>{{ $order->user->address }}</h5>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div class="order-summery-box">
                            <h5 class="cart-title">Detail Harga</h5>
                            <ul class="order-summery">
                                <li>
                                    <span>{{ $order->product->name }}</span>
                                    <span>{{ Str::shortened_price($order->product->price) }}</span>
                                </li>

                                @foreach ($order->addons as $addon)
                                    <li>
                                        <span>{{ $addon->name }}</span>
                                        <span class="font-danger">
                                            {{ Str::shortened_price($addon->pivot->price) }}
                                        </span>
                                    </li>
                                @endforeach

                                <li>
                                    <span>Biaya Tambahan</span>
                                    <span>Rp. 5.000</span>
                                </li>

                                <li class="pb-0">
                                    <span class="font-weight-bold">Biaya Total</span>
                                    <span>{{ Str::shortened_price($order->total_price) }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-lg-4">
                    <div class="summery-wrap">
                        <div class="cart-wrap grand-total-wrap">
                            <div>
                                <div class="order-summery-box">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="cart-title">Status Order</h5>
                                        <h5 class="cart-title">{{ $order->status }}</h5>
                                    </div>
                                    <div class="row g-3 mt-2">
                                        <div class="col-6 col-md-12">
                                            <input type="hidden" id="midtrans_client_token"
                                                value={{ $midtrans_token }}>
                                            <div class="btn-solid checkout-btn" onclick="handlePayButton()"
                                                style="cursor: pointer">
                                                Checkout <i class="arrow"></i>
                                            </div>
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
            </div>
        </section>
        <!-- Invoice End -->
    </main>
    <!-- Main End -->
</x-layouts.app-layout>
