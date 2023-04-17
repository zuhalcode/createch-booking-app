<x-layouts.app-layout>
    <!-- Loader Start -->
    <div class="loader-wrapper">
        <div class="loader animate">
            <span>O</span>
            <span>S</span>
            <span>L</span>
            <span>O</span>
        </div>
    </div>
    <!-- Loader End -->

    <!-- Overlay -->
    <a href="javascript:void(0)" class="overlay-general overlay-common"></a>
    <!-- Header Start -->
    <header class="header-common header4 header4LogoChange">

        <div class="container-lg">
            <div class="nav-wrap">
                <!-- Navigation Start -->
                <nav class="navigation">
                    <div class="nav-section">
                        <div class="header-section">
                            <div class="navbar navbar-expand-xl navbar-light navbar-sticky p-0">
                                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#primaryMenu" aria-controls="primaryMenu">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <a href="index.html" class="logo-link">
                                    <img class="logo" src="/assets/images/logos/logo-4.png" alt="logo" />
                                </a>
                                <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5 class="mt-1 mb-0">Menu</h5>
                                        <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <!-- Menu-->
                                        <ul class="navbar-nav">
                                            <!-- Home -->
                                            <li class="nav-item dropdown dropdown-mega">
                                                <a class="nav-link dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Home</a>
                                                <div class="dropdown-menu home-menu">
                                                    <div class="row g-4">
                                                        <div class="col-xl-2 mega-box">
                                                            <a class="home-box" href="index.html">
                                                                <img class="img-fluid"
                                                                    src="/assets/images/demo-img/demo1.jpg"
                                                                    alt="home1" />
                                                                <span>Fashion Demo</span>
                                                            </a>
                                                        </div>

                                                        <div class="col-xl-2 mega-box">
                                                            <a class="home-box" href="index-2.html">
                                                                <img class="img-fluid"
                                                                    src="/assets/images/demo-img/demo2.jpg"
                                                                    alt="home2" />
                                                                <span>Bag Demo</span>
                                                            </a>
                                                        </div>

                                                        <div class="col-xl-2 mega-box">
                                                            <a class="home-box" href="index-3.html">
                                                                <img class="img-fluid"
                                                                    src="/assets/images/demo-img/demo3.jpg"
                                                                    alt="home3" />
                                                                <span>Grocery Demo</span>
                                                            </a>
                                                        </div>

                                                        <div class="col-xl-2 mega-box">
                                                            <a class="home-box" href="index-4.html">
                                                                <img class="img-fluid"
                                                                    src="/assets/images/demo-img/demo4.jpg"
                                                                    alt="home4" />
                                                                <span>Furniture Demo</span>
                                                            </a>
                                                        </div>

                                                        <div class="col-xl-2 mega-box">
                                                            <a class="home-box" href="index-5.html">
                                                                <img class="img-fluid"
                                                                    src="/assets/images/demo-img/demo5.jpg"
                                                                    alt="home5" />
                                                                <span>Watch Demo</span>
                                                            </a>
                                                        </div>

                                                        <div class="col-xl-2 mega-box">
                                                            <a class="home-box" href="index-6.html">
                                                                <img class="img-fluid"
                                                                    src="/assets/images/demo-img/demo6.jpg"
                                                                    alt="home6" />
                                                                <span>Shoes Demo</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Shop -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Shop</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-column">
                                                        <a class="dropdown-item" href="shop-categories.html">Shop
                                                            Categories</a>
                                                        <a class="dropdown-item" href="shop-filter.html">Shop
                                                            Filter</a>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Shop
                                                            Left Sidebar</a>
                                                        <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                                        <a class="dropdown-item" href="shop-masanory.html">Shop
                                                            Masonry</a>
                                                        <a class="dropdown-item" href="shop-no-sidebar.html">Shop No
                                                            Sidebar</a>
                                                        <a class="dropdown-item" href="shop-right-sidebar.html">Shop
                                                            Right Sidebar</a>
                                                        <a class="dropdown-item" href="shop-top-filter.html">Shop Top
                                                            Filter</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Product -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">Product</a>
                                            </li>

                                            <!-- About Us -->
                                            <li class="nav-item dropdown dropdown-mega">
                                                <a class="nav-link dropdown-toggle" href="#"
                                                    data-bs-toggle="dropdown">About Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navigation End -->

                <!-- Menu Right Start  -->
                <div class="menu-right">
                    <div class="select-menu">
                        <div class="dropdown select-dropdown">
                            <button id="unitSelected"><span>USD</span> <i data-feather="chevron-down"></i></button>
                            <ul class="onhover-show-div">
                                <li class="unit">USD</li>
                                <li class="unit">EUR</li>
                                <li class="unit">INR</li>
                                <li class="unit">CNY</li>
                            </ul>
                        </div>
                        <div class="dropdown select-dropdown" id="translate">
                            <button id="languageSelected"><span>English</span> <i
                                    data-feather="chevron-down"></i></button>
                            <ul class="onhover-show-div">
                                <li class="lang">English</li>
                                <li class="lang">Chinese</li>
                                <li class="lang">Arabic</li>
                                <li class="lang">Russian</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Icon Menu Start -->
                    <ul class="icon-menu">
                        <li>
                            <button class="search-button"><i data-feather="search"></i></button>
                            <!-- Search Input Start -->
                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search"></i>
                                    </span>
                                    <input type="text" class="form-control search-type"
                                        placeholder="Search here.." />
                                    <span class="input-group-text close-search">
                                        <i data-feather="x"></i>
                                    </span>
                                </div>

                                <!-- Suggestion Start -->
                                <div class="search-suggestion">
                                    <ul>
                                        <li>
                                            <div class="product-cart media">
                                                <img src="/assets/images/fashion/product/front/4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="" />
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6>Women’s long sleeve Jacket</h6>
                                                    </a>
                                                    <ul class="rating p-0 mb">
                                                        <li>
                                                            <i class="fill" data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fill" data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fill" data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fill" data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">$280.00</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-cart media">
                                                <img src="/assets/images/fashion/product/front/5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="" />
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6>Shirt short mini dresses</h6>
                                                    </a>
                                                    <ul class="rating p-0">
                                                        <li>
                                                            <i class="fill" data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fill" data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fill" data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fill" data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">$35.00</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Suggestion Start -->
                            </div>
                            <!-- Search Input End -->
                        </li>

                        <li class="user">
                            <div class="dropdown user-dropdown">
                                <a href="javascript:void(0)"><i data-feather="user"></i></a>
                                <ul class="onhover-show-div">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="dropdown whislist-dropdown">
                                <a href="javascript:void(0)"><i data-feather="heart"></i> <span
                                        class="notification-label">0</span></a>
                                <div class="onhover-show-div">
                                    <a href="wishlist.html"> <img
                                            src="https://themes.pixelstrap.com/oslo/assets/icons/svg/box.svg"
                                            class="img-fluid" alt="box" /> </a>
                                    <div class="content">
                                        <a href="wishlist.html">
                                            <h6>Your wishlist empty !!</h6>
                                            <p>explore more and shortlist items.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Cart Menu Start -->
                        <li>
                            <div class="dropdown shopingbag">
                                <a href="javascript:void(0)" class="cart-button"><i data-feather="shopping-bag"></i>
                                    <span class="notification-label">3</span></a>
                                <a href="javascript:void(0)" class="overlay-cart overlay-common"></a>
                                <div class="onhover-cart-dropdown">
                                    <div class="onhover-show-div">
                                        <div class="dropdown-header">
                                            <div class="control">
                                                <a href="cart.html">Shopping Cart</a>
                                                <button class="back-cart"><i data-feather="arrow-right"></i></button>
                                            </div>
                                        </div>

                                        <div class="card-wrap custom-scroll">
                                            <!-- Cart Item Start -->
                                            <div class="cart-card media">
                                                <a href="product.html"> <img
                                                        src="/assets/images/fashion/product/front/8.jpg"
                                                        class="img-fluid" alt="product" /> </a>
                                                <div class="media-body">
                                                    <a href="product.html">
                                                        <h6>Concrete Jungle Pack</h6>
                                                    </a>
                                                    <span>$120.00</span>
                                                    <div class="plus-minus">
                                                        <i class="sub" data-feather="minus"></i>
                                                        <input type="number" value="1" min="1"
                                                            max="10" />
                                                        <i class="add" data-feather="plus"></i>
                                                    </div>
                                                </div>
                                                <button class="remove-cart"><i data-feather="x"></i></button>
                                            </div>
                                            <!-- Cart Item End -->

                                            <!-- Cart Item Start -->
                                            <div class="cart-card media">
                                                <a href="product.html"> <img
                                                        src="/assets/images/fashion/product/front/9.jpg"
                                                        class="img-fluid" alt="product" /> </a>
                                                <div class="media-body">
                                                    <a href="product.html">
                                                        <h6>Concrete Jungle Pack</h6>
                                                    </a>
                                                    <span>$120.00</span>
                                                    <div class="plus-minus">
                                                        <i class="sub" data-feather="minus"></i>
                                                        <input type="number" value="1" min="1"
                                                            max="10" />
                                                        <i class="add" data-feather="plus"></i>
                                                    </div>
                                                </div>
                                                <button class="remove-cart"><i data-feather="x"></i></button>
                                            </div>
                                            <!-- Cart Item End -->

                                            <!-- Cart Item Start -->
                                            <div class="cart-card media">
                                                <a href="product.html"> <img
                                                        src="/assets/images/fashion/product/front/7.jpg"
                                                        class="img-fluid" alt="product" /> </a>
                                                <div class="media-body">
                                                    <a href="product.html">
                                                        <h6>Concrete Jungle Pack</h6>
                                                    </a>
                                                    <span>$120.00</span>
                                                    <div class="plus-minus">
                                                        <i class="sub" data-feather="minus"></i>
                                                        <input type="number" value="1" min="1"
                                                            max="10" />
                                                        <i class="add" data-feather="plus"></i>
                                                    </div>
                                                </div>
                                                <button class="remove-cart"><i data-feather="x"></i></button>
                                            </div>
                                            <!-- Cart Item End -->
                                        </div>
                                        <div class="dropdown-footer">
                                            <div class="freedelevery">
                                                <p class="terms-condition">FREE SHIPPING! Continue Shopping to add more
                                                    product to you cart and receive free shipping for orders over
                                                    <strong>$500</strong>
                                                </p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="total-price">
                                                <span>Total</span>
                                                <span>$450</span>
                                            </div>

                                            <div class="btn-group block-group">
                                                <a href="cart.html" class="btn-solid">View Cart</a>
                                                <a href="payment.html" class="btn-outline">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Cart Menu End -->
                    </ul>
                    <!-- Icon Menu End -->
                </div>
                <!-- Menu Right End  -->
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="main">
        <!-- Home Section Start -->
        <section class="home-slider4 ratio_47 p-0">
            <div class="banner">
                <img class="img-fluid bg-img" src="/assets/images/furniture/banner/banner.jpg" alt="banner" />

                <div class="content-box">
                    <div class="content">
                        <span class="corner-wrap right-top">
                            <span class="corner"></span>
                        </span>

                        <span class="corner-wrap left-top">
                            <span class="corner"></span>
                        </span>

                        <h1>Eco Friendly Furniture With <span> High-end Quality </span></h1>
                        <p>The best interior designer created echo-friendly furniture for your dream home, visit all
                            creative products</p>
                    </div>
                    <div class="btn-style4">
                        <a href="shop-left-sidebar.html" class="btn">
                            <span class="corner-wrap left-top">
                                <span class="corner"></span>
                            </span>

                            <span class="corner-wrap right-bottom">
                                <span class="corner"></span>
                            </span>

                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home Section End -->

        <!-- Sub Banner Section Start -->
        <section class="sub-banner-5 pt-0">
            <div class="container-lg">
                <div class="sub-banner">
                    <img class="bg-img" src="../assets/images/furniture/banner/sub-banner2.jpg" alt="sub-banner" />

                    <div class="content-box">
                        <h5 class="title-banner">
                            <h2 class="main-title">ABOUT US</h2>
                        </h5>
                        <p>Deskripsi Singkat</p>

                        <div class="btn-box">
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
        <!-- Sub Banner Section End -->

        <!-- Product Section Start -->
        <section class="collection-section pt-0">
            <div class="container-lg">
                <div class="title-box5 side-by-side">
                    <div>
                        <h2 class="main-title">PRODUCT</h2>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <!-- Bedroom Tab Start -->
                    <div class="tab-pane fade" id="bedroom" role="tabpanel" aria-labelledby="bedroom-tab">
                        <div class="bedroom-content">
                            <div
                                class="row gy-3 gy-sm-4 gy-xxl-5 g-xxl-3 gx-2 gx-sm-3 row-cols-3 row-cols-xl-4 row-cols-xxl-5 ratio_asos">
                                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/1.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Rohe Chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/2.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>White Sofa chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/3.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Blue Plates</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/4.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Table Wing Chair Fredericia</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/5.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Stool Wing chair, table</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/6.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Incandescent light bulb</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/7.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Coffee Table</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/8.jpg"
                                                    alt="product" />
                                            </a>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Egg Chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/9.jpg"
                                                    alt="product" />
                                            </a>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Unique modern lamp</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/10.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>White stool</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bedroom Tab End -->

                    <!-- Desk Tab Start -->
                    <div class="tab-pane fade show active" id="desk" role="tabpanel"
                        aria-labelledby="desk-tab">
                        <div class="desk-content">
                            <div
                                class="row gy-3 gy-sm-4 gy-xxl-5 g-xxl-3 gx-2 gx-sm-3 row-cols-3 row-cols-xl-4 row-cols-xxl-5 ratio_asos">
                                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/1.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Rohe Chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/2.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>White Sofa chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/3.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Blue Plates</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/4.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Table Wing Chair Fredericia</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/5.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Stool Wing chair, table</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/6.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Incandescent light bulb</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/7.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Coffee Table</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/8.jpg"
                                                    alt="product" />
                                            </a>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Egg Chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/9.jpg"
                                                    alt="product" />
                                            </a>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Unique modern lamp</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img"
                                                    src="/assets/images/furniture/product/jpg/10.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>White stool</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Desk Tab End -->

                    <!-- Lighting Start -->
                    <div class="tab-pane fade" id="lighting" role="tabpanel" aria-labelledby="lighting-tab">
                        <div class="lighting-content">
                            <div
                                class="row gy-3 gy-sm-4 gy-xxl-5 g-xxl-3 gx-2 gx-sm-3 row-cols-3 row-cols-xl-4 row-cols-xxl-5 ratio_asos">
                                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/1.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Rohe Chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/2.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>White Sofa chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/3.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Blue Plates</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/4.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Table Wing Chair Fredericia</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/5.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Stool Wing chair, table</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/6.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Incandescent light bulb</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/7.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Coffee Table</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/8.jpg"
                                                    alt="product" />
                                            </a>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Egg Chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/9.jpg"
                                                    alt="product" />
                                            </a>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Unique modern lamp</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img"
                                                    src="/assets/images/furniture/product/jpg/10.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>White stool</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Lighting End -->

                    <!-- Accessories Start -->
                    <div class="tab-pane fade" id="accessories" role="tabpanel"
                        aria-labelledby="accessories-tab">
                        <div class="accessories-content">
                            <div
                                class="row gy-3 gy-sm-4 gy-xxl-5 g-xxl-3 gx-2 gx-sm-3 row-cols-3 row-cols-xl-4 row-cols-xxl-5 ratio_asos">
                                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/1.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Rohe Chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/2.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>White Sofa chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/3.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Blue Plates</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/4.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Table Wing Chair Fredericia</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/5.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Stool Wing chair, table</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/6.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Incandescent light bulb</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/7.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Coffee Table</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/8.jpg"
                                                    alt="product" />
                                            </a>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Egg Chair</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img" src="/assets/images/furniture/product/jpg/9.jpg"
                                                    alt="product" />
                                            </a>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>Unique modern lamp</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="product-card4 option-bottom">
                                        <div class="img-box">
                                            <a href="product.html">
                                                <img class="bg-img"
                                                    src="/assets/images/furniture/product/jpg/10.jpg"
                                                    alt="product" />
                                            </a>
                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add To Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                            data-feather="shopping-bag"></i> </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <a href="product.html" class="content-box">
                                            <h5>White stool</h5>

                                            <div class="price-box">
                                                <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star-half"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accessories End -->
                </div>
            </div>
        </section>
        <!-- Collection Section End -->

        <!-- Sale Product Start -->
        <div class="tab-pane fade" id="saleProduct" role="tabpanel" aria-labelledby="saleProduct-tab">
            <div class="saleProduct-content">
                <div
                    class="row gy-3 gy-sm-4 gy-xxl-5 g-xxl-3 gx-2 gx-sm-3 row-cols-3 row-cols-xl-4 row-cols-xxl-5 ratio_asos">
                    <div class="col">
                        <div class="product-card4 option-bottom">
                            <div class="img-box">
                                <a href="product.html">
                                    <img class="bg-img" src="/assets/images/furniture/product/jpg/11.jpg"
                                        alt="product" />
                                </a>

                                <!-- Option -->
                                <ul class="option-wrap">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="javascript:void(0)" class="wishlist-btn">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html"><i data-feather="repeat"></i></a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#viewModal">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart">
                                        <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                data-feather="shopping-bag"></i> </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="product.html" class="content-box">
                                <h5>Cushion back</h5>

                                <div class="price-box">
                                    <div class="price"><span>$50.00</span> <del>$58.00</del></div>
                                    <ul class="rating p-0 mb">
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star-half"></i>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card4 option-bottom">
                            <div class="img-box">
                                <a href="product.html">
                                    <img class="bg-img" src="/assets/images/furniture/product/jpg/12.jpg"
                                        alt="product" />
                                </a>
                                <!-- Option -->
                                <ul class="option-wrap">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="javascript:void(0)" class="wishlist-btn">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html"><i data-feather="repeat"></i></a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#viewModal">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart">
                                        <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                data-feather="shopping-bag"></i> </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="product.html" class="content-box">
                                <h5>Chair</h5>

                                <div class="price-box">
                                    <div class="price"><span>$150.00</span> <del>$200.00</del></div>
                                    <ul class="rating p-0 mb">
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star-half"></i>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card4 option-bottom">
                            <div class="img-box">
                                <a href="product.html">
                                    <img class="bg-img" src="/assets/images/furniture/product/jpg/13.jpg"
                                        alt="product" />
                                </a>
                                <!-- Option -->
                                <ul class="option-wrap">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="javascript:void(0)" class="wishlist-btn">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html"><i data-feather="repeat"></i></a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#viewModal">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart">
                                        <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                data-feather="shopping-bag"></i> </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="product.html" class="content-box">
                                <h5>Pendant light</h5>

                                <div class="price-box">
                                    <div class="price"><span>$100.00</span> <del>$120.00</del></div>
                                    <ul class="rating p-0 mb">
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star-half"></i>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card4 option-bottom">
                            <div class="img-box">
                                <a href="product.html">
                                    <img class="bg-img" src="/assets/images/furniture/product/jpg/14.jpg"
                                        alt="product" />
                                </a>
                                <!-- Option -->
                                <ul class="option-wrap">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="javascript:void(0)" class="wishlist-btn">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html"><i data-feather="repeat"></i></a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#viewModal">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart">
                                        <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                data-feather="shopping-bag"></i> </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="product.html" class="content-box">
                                <h5>Oak Furniture Store</h5>

                                <div class="price-box">
                                    <div class="price"><span>$200.00</span> <del>$250.00</del></div>
                                    <ul class="rating p-0 mb">
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star-half"></i>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card4 option-bottom">
                            <div class="img-box">
                                <a href="product.html">
                                    <img class="bg-img" src="/assets/images/furniture/product/jpg/15.jpg"
                                        alt="product" />
                                </a>
                                <!-- Option -->
                                <ul class="option-wrap">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="javascript:void(0)" class="wishlist-btn">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html"><i data-feather="repeat"></i></a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#viewModal">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart">
                                        <a href="javascript:void(0)" class="addtocart-btn"> <i
                                                data-feather="shopping-bag"></i> </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="product.html" class="content-box">
                                <h5>Stool Wing chair, table</h5>

                                <div class="price-box">
                                    <div class="price"><span>$220.00</span> <del>$250.00</del></div>
                                    <ul class="rating p-0 mb">
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star-half"></i>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale Product End -->
        </div>
        </div>
        </section>
        <!-- Collection Section End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
            <div class="intagram-card2 intagram-card">
                <div class="img-box after-none">
                    <a href="javascript:void(0)">
                        <img class="img-fluid bg-img" src="/assets/images/furniture/instagram/2.jpg"
                            alt="instagram" />
                    </a>
                    <div class="on-hover dark-bodered-box dark-box-sm">
                        <div class="content-box bordered-wrap">
                            <div class="option-box bordered-content">
                                <span class="corner-wrap left-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-bottom">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap left-bottom">
                                    <span class="corner"></span>
                                </span>
                                <p>New Offer- 45% Discount</p>
                                <h5>Home Decor Furniture</h5>
                                <span class="price">$120</span>

                                <div class="control">
                                    <a href="wishlist.html">
                                        <i data-feather="heart"></i>
                                    </a>
                                    <a href="cart.html">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
            <div class="intagram-card2 intagram-card">
                <div class="img-box after-none">
                    <a href="javascript:void(0)">
                        <img class="img-fluid bg-img" src="/assets/images/furniture/instagram/3.jpg"
                            alt="instagram" />
                    </a>
                    <div class="on-hover dark-bodered-box dark-box-sm">
                        <div class="content-box bordered-wrap">
                            <div class="option-box bordered-content">
                                <span class="corner-wrap left-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-bottom">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap left-bottom">
                                    <span class="corner"></span>
                                </span>
                                <p>New Offer- 45% Discount</p>
                                <h5>Home Decor Furniture</h5>
                                <span class="price">$120</span>

                                <div class="control">
                                    <a href="wishlist.html">
                                        <i data-feather="heart"></i>
                                    </a>
                                    <a href="cart.html">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
            <div class="intagram-card2 intagram-card">
                <div class="img-box after-none">
                    <a href="javascript:void(0)">
                        <img class="img-fluid bg-img" src="/assets/images/furniture/instagram/4.jpg"
                            alt="instagram" />
                    </a>
                    <div class="on-hover dark-bodered-box dark-box-sm">
                        <div class="content-box bordered-wrap">
                            <div class="option-box bordered-content">
                                <span class="corner-wrap left-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-bottom">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap left-bottom">
                                    <span class="corner"></span>
                                </span>
                                <p>New Offer- 45% Discount</p>
                                <h5>Home Decor Furniture</h5>
                                <span class="price">$120</span>

                                <div class="control">
                                    <a href="wishlist.html">
                                        <i data-feather="heart"></i>
                                    </a>
                                    <a href="cart.html">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
            <div class="intagram-card2 intagram-card">
                <div class="img-box after-none">
                    <a href="javascript:void(0)">
                        <img class="img-fluid bg-img" src="/assets/images/furniture/instagram/5.jpg"
                            alt="instagram" />
                    </a>
                    <div class="on-hover dark-bodered-box dark-box-sm">
                        <div class="content-box bordered-wrap">
                            <div class="option-box bordered-content">
                                <span class="corner-wrap left-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-bottom">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap left-bottom">
                                    <span class="corner"></span>
                                </span>
                                <p>New Offer- 45% Discount</p>
                                <h5>Home Decor Furniture</h5>
                                <span class="price">$120</span>

                                <div class="control">
                                    <a href="wishlist.html">
                                        <i data-feather="heart"></i>
                                    </a>
                                    <a href="cart.html">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide End -->

        <!-- Slide Start -->
        <div class="swiper-slide">
            <div class="intagram-card2 intagram-card">
                <div class="img-box after-none">
                    <a href="javascript:void(0)">
                        <img class="img-fluid bg-img" src="/assets/images/furniture/instagram/3.jpg"
                            alt="instagram" />
                    </a>
                    <div class="on-hover dark-bodered-box dark-box-sm">
                        <div class="content-box bordered-wrap">
                            <div class="option-box bordered-content">
                                <span class="corner-wrap left-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-top">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap right-bottom">
                                    <span class="corner"></span>
                                </span>
                                <span class="corner-wrap left-bottom">
                                    <span class="corner"></span>
                                </span>
                                <p>New Offer- 45% Discount</p>
                                <h5>Home Decor Furniture</h5>
                                <span class="price">$120</span>

                                <div class="control">
                                    <a href="wishlist.html">
                                        <i data-feather="heart"></i>
                                    </a>
                                    <a href="cart.html">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide End -->
    </main>
    <!-- Main End -->

    <!-- Document Footer Start -->
    <footer class="footer-document footer-document2 ratio_asos mb-xxl">
        <div class="bg-footer-l">
            <img src="/assets/images/bag/banner/bg-footer-l.png" alt="banner" />
        </div>
        <div class="bg-footer-r">
            <img src="/assets/images/bag/banner/bg-footer-r.png" alt="banner" />
        </div>
        <div>
            <div class="container-lg">
                <div class="main-footer">
                    <div class="row gy-3 gy-md-4 gy-xl-0">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="content-box">
                                <img class="logo" src="/assets/images/logos/logo-4-w.png" alt="logo-white" />
                                <ul>
                                    <li><i data-feather="map-pin"></i> <span> 1418 Riverwood Drive, Suite 3245
                                            Cottonwood, CA 96052, United States </span></li>
                                    <li>
                                        <i data-feather="phone"></i><a class="nav" href="tel:185659635"><span>
                                                + 185659635 </span></a>
                                    </li>
                                    <li>
                                        <i data-feather="mail"></i><a class="nav"
                                            href="mailto:fashion098@gmail.com"><span> fashion098@gmail.com </span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-footer col-lg-2 col-md-4 order-md-3 order-lg-2">
                            <div class="nav content-box d-md-block">
                                <h5 class="heading-footer line-style">Shop By</h5>
                                <ul>
                                    <li><a class="nav" href="shop-left-sidebar.html">New In </a></li>
                                    <li><a class="nav" href="shop-left-sidebar.html">Women </a></li>
                                    <li><a class="nav" href="shop-left-sidebar.html">Men </a></li>
                                    <li><a class="nav" href="shop-left-sidebar.html">Shoes</a></li>
                                    <li><a class="nav" href="shop-left-sidebar.html">Bags & Accessories </a></li>
                                    <li><a class="nav" href="shop-left-sidebar.html">Top Brands </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-footer col-xl-2 col-lg-3 col-md-4 order-md-4 order-lg-3">
                            <div class="nav d-md-block content-box">
                                <h5 class="heading-footer line-style">Information</h5>
                                <ul>
                                    <li><a class="nav" href="index.html">Home </a></li>
                                    <li><a class="nav" href="shop-left-sidebar.html">Shop </a></li>
                                    <li><a class="nav" href="about-us.html">About Us</a></li>
                                    <li><a class="nav" href="blog-detail.html">Blog </a></li>
                                    <li><a class="nav" href="contact-us.html">Contact </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-footer col-xl-2 col-lg-3 col-md-4 order-md-5 order-lg-4">
                            <div class="nav d-md-block content-box">
                                <h5 class="heading-footer line-style">Get Help</h5>
                                <ul>
                                    <li><a class="nav" href="search.html">Privacy Policy</a></li>
                                    <li><a class="nav" href="faqs.html">FAQ</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-lg-4 order-md-2 order-lg-5">
                            <div class="content-box">
                                <h5 class="heading-footer line-style">Follow Us</h5>
                                <div class="follow-wrap">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/"> <img
                                                    src="https://themes.pixelstrap.com/oslo/assets/icons/svg/social/fb.svg"
                                                    alt="fb" /> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/accounts/login/?source=auth_switcher">
                                                <img src="https://themes.pixelstrap.com/oslo/assets/icons/svg/social/inta.svg"
                                                    alt="fb" /> </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/i/flow/login"> <img
                                                    src="https://themes.pixelstrap.com/oslo/assets/icons/svg/social/tw.svg"
                                                    alt="fb" /> </a>
                                        </li>
                                        <li>
                                            <a href="https://in.pinterest.com/"> <img
                                                    src="https://themes.pixelstrap.com/oslo/assets/icons/svg/social/pint.svg"
                                                    alt="fb" /> </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="subscribe-box">
                                    <h5>Newsletter Sign Up</h5>
                                    <p>Receive our latest updates about our products & promotions.</p>
                                </div>

                                <form action="javascript:void(0)" class="footer-form">
                                    <input required type="email" class="form-control"
                                        placeholder="Your email address" />
                                    <div class="btn-style4 btn-theme py-0">
                                        <button type="submit" class="btn">
                                            <span class="corner-wrap left-top">
                                                <span class="corner"></span>
                                            </span>
                                            <span class="corner-wrap right-bottom">
                                                <span class="corner"></span>
                                            </span>
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sub-footer">
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)"> <img src="/assets/icons/png/1.png"
                                            class="img-fluid blur-up lazyload" alt="payment icon" /></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <img src="/assets/icons/png/2.png"
                                            class="img-fluid blur-up lazyload" alt="payment icon" /></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <img src="/assets/icons/png/3.png"
                                            class="img-fluid blur-up lazyload" alt="payment icon" /></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <img src="/assets/icons/png/4.png"
                                            class="img-fluid blur-up lazyload" alt="payment icon" /></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0">© 2023, OSLO Template. Made with heart by Pixelstrap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Document Footer End -->

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

    <!-- Notification Start -->
    <div class="notification-wrap addToCart">
        <div class="notification">
            <img src="/assets/images/furniture/product/jpg/1.jpg" alt="product" />
            <div>
                <h5>Added To Cart</h5>
            </div>
        </div>
    </div>
    <!-- Notification End -->

    <!-- Notification Start -->
    <div class="notification-wrap addToWishlist">
        <div class="notification">
            <img src="/assets/images/furniture/product/jpg/1.jpg" alt="product" />
            <div>
                <h5>Added To Wishlist</h5>
            </div>
        </div>
    </div>
    <!-- Notification End -->

    <!-- View Product Modal Start -->
    <div class="modal view-product fade" id="viewModal" tabindex="-1" aria-labelledby="viewModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <span class="close-modal d-none d-md-block" data-bs-toggle="modal"
                        data-bs-target="#viewModal"><i data-feather="x"></i></span>
                    <div class="row gy-4 g-md-0">
                        <div class="col-md-7">
                            <div class="slider-box">
                                <span class="close-modal d-md-none" data-bs-toggle="modal"
                                    data-bs-target="#viewModal"><i data-feather="x"></i></span>
                                <div class="row g-2">
                                    <div class="col-2">
                                        <div class="thumbnail-box">
                                            <div class="swiper thumbnail-img-box thumbnailSlider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="/assets/images/furniture/product/jpg/16.jpg"
                                                            alt="img" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="/assets/images/furniture/product/jpg/16-1.jpg"
                                                            alt="img" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="/assets/images/furniture/product/jpg/16-2.jpg"
                                                            alt="img" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="/assets/images/furniture/product/jpg/16-3.jpg"
                                                            alt="img" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="/assets/images/furniture/product/jpg/16-2.jpg"
                                                            alt="img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 ratio_square">
                                        <div class="swiper mainslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img class="bg-img"
                                                        src="/assets/images/furniture/product/jpg/16.jpg"
                                                        alt="img" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="bg-img"
                                                        src="/assets/images/furniture/product/jpg/16-1.jpg"
                                                        alt="img" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="bg-img"
                                                        src="/assets/images/furniture/product/jpg/16-2.jpg"
                                                        alt="img" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="bg-img"
                                                        src="/assets/images/furniture/product/jpg/16-3.jpg"
                                                        alt="img" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="bg-img"
                                                        src="/assets/images/furniture/product/jpg/16-2.jpg"
                                                        alt="img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="product-detail-box furniture">
                                <div class="product-option">
                                    <h4>Oak Furniture Store</h4>
                                    <div class="option price">
                                        <h5>Price</h5>
                                        <span> $200.00 </span> <del>$300.00</del>
                                    </div>
                                    <div class="option">
                                        <h5>Product Description</h5>
                                        <p class="content-color">
                                            Interactively synthesize fractionalized bandwidth and resource sucking
                                            infrastructures. Proactively incubate resource sucking benefits rather than
                                            frictionless infrastructures.
                                        </p>
                                    </div>
                                    <div class="option">
                                        <h5>Material:</h5>
                                        <ul class="color-list">
                                            <li class="bg-theme-p-1 active"></li>
                                            <li class="bg-theme-p-2"></li>
                                            <li class="bg-theme-p-3"></li>
                                        </ul>
                                    </div>
                                    <div class="option">
                                        <h5>Size:</h5>
                                        <ul class="size-list">
                                            <li class="active">3/4" x 1-1/2"</li>
                                            <li>4/8" x 1-2/4"</li>
                                        </ul>
                                    </div>
                                    <div class="option">
                                        <h5>Quantity:</h5>
                                        <div class="plus-minus">
                                            <i class="sub" data-feather="minus"></i>
                                            <input type="number" value="1" min="1"
                                                max="10" />
                                            <i class="add" data-feather="plus"></i>
                                        </div>
                                    </div>

                                    <div class="btn-group">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#viewModal" class="btn-solid btn-sm addtocart-btn">Add
                                            To Cart </a>
                                        <a href="product.html" class="btn-outline btn-sm">View Full</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View Product Modal End -->

    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
        <button class="tap-to-top-button"><i data-feather="chevrons-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->
</x-layouts.app-layout>
