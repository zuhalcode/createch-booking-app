<x-layouts.app-layout>
    <x-ui.loader />

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general"></a>

    <x-app.header :logo="$company->logo" />

    <!-- Main Start -->
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src="../assets/images/inner-page/banner-p.jpg" alt="banner" />

                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>Product</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href={{ url('/') }}>Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current">
                                <a href={{ url("/products/$product->id") }}>Product</a>
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

                    <div class="col-md-5">
                        <div class="product-detail-box">
                            <div class="product-option">
                                <h2>{{ $product->name }}</h2>

                                <div class="option price">
                                    <span>Rp. {{ number_format($product->price, 0, ',', '.') }}</span>
                                </div>

                                <div class="option">
                                    <p class="content-color">
                                        {{ $product->description }}
                                    </p>
                                </div>

                                {{-- Slot Tanggal --}}
                                <div class="option size" style="">
                                    <div class="title-box4">
                                        <h4 class="heading">Slot Tanggal <span class="bg-theme-blue"></span></h4>
                                    </div>
                                    <ul class="size-list" style="white-space: nowrap; overflow-x: auto;">
                                        @for ($i = 1; $i < 7; $i++)
                                            <li class="p-4 bold d-flex flex-column rounded-1">
                                                {{ $i }} <span>May</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                                {{-- End Slot Tanggal --}}

                                {{-- Slot Waktu --}}
                                <div class="option size">
                                    <div class="title-box4">
                                        <h4 class="heading">Time Slot <span class="bg-theme-blue"></span></h4>
                                    </div>
                                    <ul class="size-list d-grid">
                                        @foreach ($slots as $slot)
                                            <li class="p-4 bold" style="width: 150px;">
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
                                            <h4 class="heading">Addons <span class="bg-theme-blue"></span></h4>
                                        </div>
                                        <div class="filter-content">
                                            <ul class="filter-check d-grid gap-1"
                                                style="grid-template-columns: repeat(2, 1fr)">
                                                @foreach ($addons as $addon)
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox" />
                                                            <span class="checkbox__checkmark"></span>
                                                            <span class="checkbox__body gap-2"
                                                                style="justify-content: flex-start; font-weight: 500">
                                                                {{ ucfirst($addon->name) }}
                                                                <p>
                                                                    {{ number_format($addon->price / 1000, 0) . 'K' }}
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

                                <div class="btn-group">
                                    <a href={{ url('/products/1/order') }} class="btn-solid btn-sm addtocart-btn">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Section End -->
    </main>
    <!-- Main End -->

</x-layouts.app-layout>
