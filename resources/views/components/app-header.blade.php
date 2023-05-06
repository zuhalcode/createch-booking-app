<!-- Header Start -->
@if (request()->is("$slug"))
    <header class="header-common header4 header4LogoChange">
    @else
        <header class="header-common">
@endif
<!-- Top Header -->
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

                        <a href={{ url('/') }} class="logo-link">
                            <img class="logo" src={{ asset($logo) }} alt="logo" />
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
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ url("/$slug") }}>Home</a>
                                    </li>

                                    @if (auth()->check())
                                        @canany(['admin', 'super-admin'])
                                            <li class="nav-item">
                                                <a class="nav-link" href={{ url('/dashboard') }}>Dashboard</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href={{ url('/dashboard/order-detail') }}>
                                                    Dashboard
                                                </a>
                                            </li>
                                        @endcanany

                                        <li class="nav-item" style="cursor: pointer">
                                            <form id="logout-form-nav" action={{ url('/logout') }} method="post">
                                                @csrf
                                                <div class="nav-link" onclick="handleLogout('logout-form-nav')">
                                                    Logout
                                                </div>
                                            </form>
                                        </li>
                                    @else
                                        <!-- Auth -->
                                        <li class="nav-item">
                                            <a class="nav-link" href={{ url("/$slug/auth/login") }}>Login</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href={{ url("/$slug/auth/register") }}>Register</a>
                                        </li>
                                        {{-- End Auth --}}
                                    @endif
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
