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
            @if (isset($menu['submenu']))
                <li class="menu-item">
                    <a href={{ url($menu['route']) }} class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
                        <div data-i18n="Analytics">{{ $menu['name'] }}</div>
                    </a>


                    <ul class="menu-sub">
                        @foreach ($menu['submenu'] as $submenu)
                            <li class="menu-item">
                                <a href={{ $submenu['route'] }} class="menu-link">
                                    <div data-i18n="Without menu">{{ $submenu['name'] }}</div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="menu-item">
                    <a href={{ url($menu['route']) }} class="menu-link menu">
                        <i class="menu-icon tf-icons bx {{ $menu['icon'] }}"></i>
                        <div data-i18n="Analytics">{{ $menu['name'] }}</div>
                    </a>
                </li>
            @endif
        @endforeach

        {{-- Logout --}}
        <li class="menu-item" style="cursor: pointer;">
            <form id="logout-form" action={{ url('/auth/logout') }} method="post" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                @csrf
                <div id="logout" data-i18n="Authentications" style="width: 100%">Logout</div>
            </form>
        </li>
        {{-- Logout --}}
        <script>
            document.querySelector('#logout').addEventListener('click', function() {
                document.querySelector('#logout-form').submit();
            });
        </script>
    </ul>
</aside>
<!-- / Menu -->
