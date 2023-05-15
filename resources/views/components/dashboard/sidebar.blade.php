<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <x-ui.logo />
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @foreach ($menus as $menu)
            @if ($menu['role'] === 'admin')
                @canany(['admin-company', 'super-admin', 'admin-branch'])
                    @if (isset($menu['submenu']))
                        <li class="menu-item">
                            <div class="menu-link menu-toggle" style="cursor: pointer">
                                <i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
                                <div>{{ $menu['name'] }}</div>
                            </div>
                            <ul class="menu-sub">
                                @foreach ($menu['submenu'] as $submenu)
                                    <li class="menu-item">
                                        <a href={{ $submenu['route'] }} class="menu-link">
                                            <div>{{ $submenu['name'] }}</div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="menu-item">
                            <a href={{ url($menu['route']) }} class="menu-link menu">
                                <i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
                                <div>{{ $menu['name'] }}</div>
                            </a>
                        </li>
                    @endif
                @endcan
            @elseif($menu['role'] === 'super-admin')
                @can('super-admin')
                    @if (isset($menu['submenu']))
                        <li class="menu-item">
                            <div class="menu-link menu-toggle" style="cursor: pointer">
                                <i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
                                <div>{{ $menu['name'] }}</div>
                            </div>
                            <ul class="menu-sub">
                                @foreach ($menu['submenu'] as $submenu)
                                    <li class="menu-item">
                                        <a href={{ $submenu['route'] }} class="menu-link">
                                            <div>{{ $submenu['name'] }}</div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="menu-item">
                            <a href={{ url($menu['route']) }} class="menu-link menu">
                                <i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
                                <div>{{ $menu['name'] }}</div>
                            </a>
                        </li>
                    @endif
                @endcan
            @else
                <li class="menu-item">
                    <a href={{ url($menu['route']) }} class="menu-link menu">
                        <i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
                        <div>{{ $menu['name'] }}</div>
                    </a>
                </li>
            @endif
        @endforeach

        {{-- Logout --}}
        <li class="menu-item" style="cursor: pointer;" onclick="handleLogout('logout-sidebar')">
            <form id="logout-sidebar" action={{ url(Route::current()->parameter('slug') . '/auth/logout') }}
                method="POST" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                @csrf
                <div>Logout</div>
            </form>
        </li>
        {{-- Logout --}}
    </ul>
</aside>
<!-- / Menu -->
