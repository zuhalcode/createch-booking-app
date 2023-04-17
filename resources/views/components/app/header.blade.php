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
                                <img class="logo" src={{ asset('/assets/images/logos/logo-4.png') }} alt="logo" />
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
                                            <a class="nav-link dropdown-toggle" href={{ url('') }}
                                                data-bs-toggle="dropdown">Home</a>
                                        </li>

                                        <!-- Product -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href={{ url('auth/login') }}
                                                data-bs-toggle="dropdown">Login</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href={{ url('auth/register') }}
                                                data-bs-toggle="dropdown">Register</a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navigation End -->
        </div>
    </div>
</header>
<!-- Header End -->
