<x-layouts.app-layout>
    <x-ui.loader />

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general overlay-common"></a>

    <x-app.header />

    <!-- Main Start -->
    <main class="main">
        <!-- Home Section Start -->
        <section class="home-slider4 ratio_47 p-0">
            <div class="banner">
                <img class="img-fluid bg-img"
                    src="{{ asset($cover->image ? '/storage/' . $cover->image : '/assets/images/furniture/banner/banner.jpg') }}"
                    alt="banner" />

                <div class="content-box">
                    <div class="content">
                        <span class="corner-wrap right-top">
                            <span class="corner"></span>
                        </span>

                        <span class="corner-wrap left-top">
                            <span class="corner"></span>
                        </span>

                        <h1>
                            {{ $cover->first_heading_text ?? 'Eco Friendly Furniture With' }}
                            <span>{{ $cover->second_heading_text ?? 'High-end Quality' }}</span>
                        </h1>
                        <p>
                            {{ $cover->short_desc ?? 'The best interior designer created echo-friendly furniture for your dream home, all creative products' }}
                        </p>
                    </div>
                    <div class="btn-style4 scroll-btn">
                        <div class="btn">
                            <span class="corner-wrap left-top">
                                <span class="corner"></span>
                            </span>

                            <span class="corner-wrap right-bottom">
                                <span class="corner"></span>
                            </span>
                            Book Now
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home Section End -->

        <!-- About Us Start -->
        <section class="sub-banner-5 pt-0">
            <div class="container-lg">
                <div class="sub-banner">
                    <img class="bg-img" src="../assets/images/furniture/banner/sub-banner2.jpg" alt="sub-banner" />

                    <div class="content-box">
                        <h5 class="title-banner">
                            About Us
                        </h5>
                        <h6 class="collection-title"><span class="line"></span> Bookly</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, rem dolor! Aspernatur
                            numquam nam magnam ex neque corporis dolorem reprehenderit ipsum quisquam illo repellat
                            cupiditate necessitatibus doloremque, exercitationem dolores dignissimos?
                        </p>

                        <div class="btn-box">
                            <div class="btn-style4 scroll-btn">
                                <div class="btn">
                                    <span class="corner-wrap left-top">
                                        <span class="corner"></span>
                                    </span>

                                    <span class="corner-wrap right-bottom">
                                        <span class="corner"></span>
                                    </span>
                                    Book Now
                                </div>
                            </div>


                            <div class="contact-info">
                                <a class="phone-link" href="tel:254562541254">
                                    <img src="https://themes.pixelstrap.com/oslo/assets/icons/svg/phone-book.svg"
                                        alt="phone-book" />
                                    (406) 555-0120
                                </a>

                                <ul class="social-list">
                                    <li>
                                        <a href="https://www.facebook.com/"> <i class="fill"
                                                data-feather="facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/accounts/login/"><i
                                                data-feather="instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us End -->

        <!-- Collection Section Start -->
        <section class="collection-section pt-0" id="products">
            <div class="container-lg">
                <div class="title-box5 side-by-side">
                    <div>
                        <h5 class="sub-title"><span class="line"></span> Our Best Collection</h5>
                        <h2 class="main-title">TOP COLLECTION</h2>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">

                    <!-- Desk Tab Start -->
                    <div class="tab-pane fade show active" id="desk" role="tabpanel" aria-labelledby="desk-tab">
                        <div class="desk-content">
                            <div
                                class="row gy-3 gy-sm-4 gy-xxl-5 g-xxl-3 gx-2 gx-sm-3 row-cols-3 row-cols-xl-4 row-cols-xxl-5 ratio_asos">

                                @for ($i = 0; $i < 10; $i++)
                                    <x-app.product-card img='/assets/images/furniture/product/jpg/7.jpg' price="$50.00"
                                        href='/products/1'>
                                        Coffee Table
                                    </x-app.product-card>
                                @endfor

                            </div>
                        </div>
                    </div>
                    <!-- Desk Tab End -->
                </div>
            </div>
        </section>
        <!-- Collection Section End -->
    </main>
    <!-- Main End -->

    <!-- Mobile Menu Footer Start -->
    <footer class="mobile-menu-footer d-sm-none">
        <ul>
            <li>
                <a href="index.html" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="search.html" class="search-link">
                    <i data-feather="search"></i>
                    <span>Search</span>
                </a>
            </li>
            <li>
                <a href="cart.html">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="wishlist.html">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.html">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </footer>
    <!-- Mobile Menu Footer End -->


    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
        <button class="tap-to-top-button"><i data-feather="chevrons-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->
</x-layouts.app-layout>
