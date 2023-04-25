<ul class="menu-inner py-1">
    @foreach ($menus as $menu)
        @if (isset($menu['auth']))
            @canany(['admin', 'super-admin'])
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
                    @if ($menu['role'] === 'super-admin')
                        @can('super-admin')
                            <li class="menu-item">
                                <a href={{ url($menu['route']) }} class="menu-link menu">
                                    <i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
                                    <div>{{ $menu['name'] }}</div>
                                </a>
                            </li>
                        @endcan
                    @endif
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
    <li class="menu-item" style="cursor: pointer;">
        <form id="logout-sidebar" action={{ url('/auth/logout') }} method="post" class="menu-link">
            <i class="menu-icon tf-icons bx bx-log-out"></i>
            @csrf
            <div id="logout-btn" style="width: 100%" onclick="handleLogout('logout-sidebar')">Logout</div>
        </form>
    </li>
    {{-- Logout --}}
</ul>
