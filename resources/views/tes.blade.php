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
                            <h1>Product</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href={{ url("/$slug") }}>Home</a></li>
                            <li>
                                <i data-feather="chevron-right"></i>
                            </li>
                            <li class="current">
                                <a href={{ url("/$slug/products/$product->id") }}>Product</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Product Section Start -->
        <section class="product-page">
            <div class="container-lg">
                <div class="row g-3 g-xl-4 view-product">
                    {{-- Image Section --}}
                    <div class="col-md-7">
                        <div class="slider-box sticky off-50 position-sticky">
                            <div class="row g-2">
                                <div class="col-2">
                                    <div class="thumbnail-box">
                                        <div class="swiper thumbnail-img-box thumbnailSlider2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src={{ asset($product->image) }} alt="img" />
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src={{ asset($product->image) }} alt="img" />
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src={{ asset($product->image) }} alt="img" />
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src={{ asset($product->image) }} alt="img" />
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src={{ asset($product->image) }} alt="img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-10 ratio_square">
                                    <div class="swiper mainslider2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src={{ asset($product->image) }} alt="img" />
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="bg-img" src="../assets/images/fashion/product/front/7-1.jpg"
                                                    alt="img" />
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="bg-img" src="../assets/images/fashion/product/front/7-2.jpg"
                                                    alt="img" />
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="bg-img" src="../assets/images/fashion/product/front/7-3.jpg"
                                                    alt="img" />
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="bg-img" src="../assets/images/fashion/product/front/7.jpg"
                                                    alt="img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Image Section --}}

                    <div class="col-md-5 d-flex flex-column">
                        {{-- Product Detail --}}
                        <div class="product-detail-box">
                            <form class="product-option" id="product-detail-order-form" method="GET"
                                action={{ url("/$slug/orders/detail") }}>
                                @csrf
                                <h2>{{ $product->name }}</h2>
                                <div class="option price">
                                    <span>{{ Str::shortened_price($product->price) }}</span>
                                </div>

                                <div class="option">
                                    <p class="content-color">
                                        {{ $product->description }}
                                    </p>
                                </div>
                            </form>
                        </div>
                        {{-- End Product Detail --}}

                        <!-- Section Branch Start -->
                        <section style="margin-top: -3rem">
                            <div class="option size text-start">
                                <div class="title-box4">
                                    <h4 class="heading">
                                        Pilih Branch <span class="bg-theme-blue"></span>
                                    </h4>
                                </div>
                            </div>

                            <ul class="nav nav-pills nav-tabs2 solid-outline row-tab flex-row flex-nowrap overflow-auto"
                                id="pills-tab3" role="tablist">
                                @foreach ($product->branches as $key => $branch)
                                    <li class="nav-item {{ $key === 0 ? 'active' : '' }}" role="presentation"
                                        onclick="resetForm()">
                                        <button class="nav-link {{ $key === 0 ? 'active' : '' }}" data-bs-toggle="pill"
                                            data-bs-target="#branch-{{ $key }}" type="button" role="tab"
                                            aria-selected="{{ $key === 0 ? true : false }}">
                                            {{ $branch->name }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="tab-content" id="myTabContent2">
                                @foreach ($product->branches as $key => $branch)
                                    <!-- Branch Tab Start -->
                                    <div class="tab-pane fade 
                                        {{ $key === 0 ? ' show active' : '' }}"
                                        id="branch-{{ $key }}" role="tabpanel">

                                        <form class="product-option mt-3"
                                            id="product-detail-order-form-{{ $key }}" method="GET"
                                            action={{ url("/$slug/orders/detail") }}>
                                            @csrf

                                            {{-- Hidden input --}}
                                            <input type="hidden" name="product_id" value={{ $product->id }}>

                                            {{-- Slot Tanggal --}}
                                            <div class="option size">
                                                <div class="title-box4">
                                                    <h4 class="heading">
                                                        Slot Tanggal <span class="bg-theme-blue"></span>
                                                    </h4>
                                                </div>

                                                <div class="title-box4">
                                                    <ul class="size-list overflow-auto">
                                                        @foreach ($dates as $date)
                                                            @php
                                                                $holidayDate = in_array($date->format('Y-m-d'), $holidays);
                                                            @endphp
                                                            <li class="p-4 bold d-flex flex-column rounded-1 date-slot 
                                                            {{ $holidayDate ? 'bg-danger text-white' : '' }}"
                                                                data-date={{ $date->format('d-m-Y') }}>
                                                                {{ $date->format('j') }}
                                                                <span>{{ $date->format('M') }}</span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            {{-- End Slot Tanggal --}}

                                            {{-- Slot Waktu --}}
                                            <div class="option size">
                                                <div class="title-box4">
                                                    <h4 class="heading">
                                                        Time Slot <span class="bg-theme-blue"></span>
                                                    </h4>
                                                </div>
                                                <ul class="size-list d-grid">
                                                    @foreach ($branch->slots as $slot)
                                                        <li class="p-4 bold time-slot" style="width: 150px;"
                                                            data-slot={{ $slot->id }}>
                                                            {{ date('h:i A', strtotime($slot->time)) }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            {{-- End Slot Waktu --}}

                                            {{-- Addons --}}
                                            @if (!$addons->isEmpty())
                                                <div class="option size">
                                                    <div class="title-box4">
                                                        <h4 class="heading">
                                                            Addons <span class="bg-theme-blue"></span>
                                                        </h4>
                                                    </div>
                                                    <div class="filter-content">
                                                        <ul class="filter-check d-grid gap-1"
                                                            style="grid-template-columns: repeat(2, 1fr)">
                                                            @foreach ($addons as $addon)
                                                                <li class="addon-slot">
                                                                    <label class="checkboxes style-1">
                                                                        <input type="checkbox"
                                                                            data-addon={{ $addon->id }} />
                                                                        <span class="checkbox__checkmark"></span>
                                                                        <span class="checkbox__body gap-2"
                                                                            style="justify-content: flex-start; font-weight: 500">
                                                                            {{ ucfirst($addon->name) }}
                                                                            <p>
                                                                                {{ Str::shortened_price($addon->price) }}
                                                                            </p>
                                                                        </span>
                                                                    </label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                            {{-- End Addons --}}

                                            <div class="btn-group mx-auto" style="cursor: pointer"
                                                onclick="handleOnSubmit('product-detail-order-form-{{ $key }}')">
                                                <p class="btn-solid btn-lg">
                                                    Book Now
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Branch Tab End -->
                                @endforeach
                            </div>
                        </section>
                        <!-- Section Branch End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Section End -->
    </main>
    <!-- Main End -->
</x-layouts.app-layout>
