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

                    <div class="d-flex p-3 rounded-3 justify-content-between text-white mt-2"
                        style="background-color: #c69057">
                        <div class="d-flex flex-column gap-2">
                            <h5><b>Invoice : </b> order-basic-239749141</h5>
                        </div>

                        <div class="d-flex gap-2">
                            <h5><b>Status :</b></h5>
                            <span class="badge bg-primary text-white"
                                style="font-size: .8rem">{{ $order->status }}</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-3">
                            <div class="d-flex flex-column text-start success-contain">
                                <h5><b>To :</b></h5>
                                <h5>{{ ucfirst($order->user->name) }}</h5>
                                <h5>{{ $order->user->email }}</h5>
                                <h5>{{ $order->user->phone }}</h5>
                            </div>
                        </div>

                        <div class="d-flex flex-column success-contain font-light text-end text-capitalize">
                            <h5><b>Issued date :</b> {{ $order->created_at->format('l, d F Y H:i') }}</h5>
                            <h5>
                                <b>Expired date :</b>
                                {{ date('l, d F Y H:i', strtotime($order->expired_at)) }}
                            </h5>
                        </div>
                    </div>

                    <div class="mt-2">
                        <div class="order-summery-box">
                            <h3>Invoice Items</h3>
                            <table class="table cart-table m-md-0">
                                <thead class="text-start">
                                    <tr>
                                        <th class="d-none d-sm-table-cell">PRODUCT</th>
                                        <th class="d-none d-sm-table-cell">PRICE</th>
                                    </tr>
                                </thead>
                                <tbody class="text-start">
                                    <tr>
                                        <td>
                                            <div class="product-detail">
                                                <div class="details">
                                                    <h4 class="title-color font-default2">
                                                        {{ ucfirst($order->product->name) }}
                                                    </h4>
                                                    <span class="size gap-2 d-flex d-sm-none">
                                                        Price :
                                                        <span>
                                                            {{ Str::shortened_price($order->product->price) }}
                                                        </span>
                                                    </span>
                                                    <span class="size gap-2 d-flex">
                                                        Date : <span>23 Jan 2023</span>
                                                    </span>
                                                    <span class="size gap-2 d-flex">
                                                        Time Slot :
                                                        <span>
                                                            {{ date('h:i A', strtotime($order->slot->time)) }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="price d-none d-sm-table-cell">
                                            {{ Str::shortened_price($order->product->price) }}
                                        </td>
                                    </tr>
                                    @foreach ($order->addons as $addon)
                                        <tr>
                                            <td>
                                                <div class="product-detail">
                                                    <div class="details">
                                                        <h4 class="title-color font-default2" style="width: 320px">
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

                                    <tr>
                                        <td></td>
                                        <td class="price d-none d-sm-table-cell text-start">
                                            <p class="d-flex" style="gap: 3.4rem">
                                                <b>Subtotal</b>
                                                <span>{{ Str::shortened_price($order->product->price) }}</span>
                                            </p>
                                            <p class="d-flex" style="gap: 2.8rem">
                                                <b>PPN (0%)</b>
                                                <span>{{ Str::shortened_price(0) }}</span>
                                            </p>
                                            <p class="d-flex" style="gap: 5rem">
                                                <b>Total</b>
                                                <span class="font-weight-bold">
                                                    <b>{{ Str::shortened_price($order->total_price ?? 0) }}</b>
                                                </span>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-lg-4">
                    <div class="summery-wrap">
                        <div class="cart-wrap grand-total-wrap">
                            <div>
                                @if (now() > $order->expired_at)
                                    <div class="row g-3 mt-2">
                                        <h5 class="cart-title">This Order has Expired</h5>
                                        <div class="col-6 col-md-12">
                                            <a href={{ url("/$slug") }}
                                                class="btn-outline w-100 justify-content-center checkout-btn">
                                                Back To Home
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="order-summery-box">
                                        <h5 class="cart-title">Total Due</h5>
                                        <h2 class="">{{ Str::shortened_price($order->total_price) }}</h2>
                                        <div class="row g-3 mt-2">
                                            <div class="col-6 col-md-12">
                                                <input type="hidden" id="midtrans_client_token"
                                                    value={{ $midtrans_token }}>
                                                <div class="btn-solid checkout-btn" onclick="handlePayButton()"
                                                    style="cursor: pointer">
                                                    Pay Now <i class="arrow"></i>
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
                                @endif
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
