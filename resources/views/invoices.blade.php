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
                            <h1>Invoices</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href={{ url("/$slug") }}>Home</a></li>
                            <li>
                                <i data-feather="chevron-right"></i>
                            </li>
                            <li class="current">
                                <a href={{ url("/$slug/invoices") }}>Invoices</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Dashboard Start -->
        <section class="user-dashboard">
            <div class="container-lg">
                <div class="row g-3 g-xl-4 tab-wrap">
                    <div class="col-lg-4 col-xl-3 sticky">
                        <button class="setting-menu btn-solid btn-sm d-lg-none">
                            Setting Menu <i class="arrow"></i>
                        </button>
                        <div class="side-bar">
                            <span class="back-side d-lg-none"><i data-feather="x"></i></span>
                            <div class="profile-box">
                                <div class="img-box">
                                    <img class="img-fluid" src="../assets/images/avatar/avatar.jpg" alt="user" />
                                    <div class="edit-btn">
                                        <i data-feather="edit"></i>
                                        <input class="updateimg" type="file" name="img" />
                                    </div>
                                </div>

                                <div class="user-name">
                                    <h5>{{ Auth::user()->name }}</h5>
                                    <h6>{{ Auth::user()->email }}</h6>
                                </div>
                            </div>

                            <ul class="nav nav-tabs nav-tabs2" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab"
                                        data-bs-target="#orders" type="button" role="tab" aria-controls="orders"
                                        aria-selected="false">
                                        Orders
                                        <span><i data-feather="chevron-right"></i></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="right-content tab-content" id="myTabContent">
                            <!-- Order Tabs Start -->
                            <div class="tab-pane show active" id="orders" role="tabpanel"
                                aria-labelledby="orders-tab">
                                <div class="cart-wrap order-content">
                                    <div class="title-box3">
                                        <h3>My Invoices</h3>
                                        @if ($invoices->isEmpty())
                                            <p>No Order Activity to Display</p>
                                        @else
                                            <p>
                                                Hi, Thank you for booking with us. Your booking is being processed and
                                                will be confirmed soon.
                                            </p>
                                        @endif
                                    </div>

                                    <div class="order-wraper">
                                        @foreach ($invoices as $invoice)
                                            <div class="order-box">
                                                <div class="order-header">
                                                    <span><i data-feather="box"></i></span>
                                                    <div class="order-content">
                                                        <h5 class="order-status success text-capitalize">
                                                            {{ $invoice->status }}
                                                        </h5>
                                                        <p>
                                                            Created At {{ $invoice->created_at->format('d M Y') }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <a href={{ url("/$slug/invoices/$invoice->id") }}>
                                                    <div class="order-info">
                                                        <div class="product-details"
                                                            data-productDetail="product-detail">
                                                            <div class="product-content">
                                                                <h5>{{ ucfirst($invoice->product->name) }}</h5>
                                                                <p class="truncate-3">
                                                                    {{ $invoice->product->description }}
                                                                </p>
                                                                <span>Date :
                                                                    <span>{{ $invoice->created_at->format('d m Y') }}</span></span>
                                                                <span>Time :
                                                                    <span>{{ $invoice->slot->time }}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Order Tabs End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard End -->
    </main>
    <!-- Main End -->
</x-layouts.app-layout>
