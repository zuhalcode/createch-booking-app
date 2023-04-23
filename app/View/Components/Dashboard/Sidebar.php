<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $menus;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menus = [
            ['name' => 'Dashboard', 'route' => '/dashboard', 'icon' => 'bxs-dashboard', 'auth' => 'admin'],
            ['name' => 'Homepage Management', 'route' => '', 'icon' => 'bx-home-circle', 'auth' => 'admin',
                'submenu' => [
                    ['name' => 'Company Management', 'route' => '/dashboard/company'],
                    ['name' => 'Landing Page Management', 'route' => '/dashboard/landing-page'],
                    ['name' => 'Branch Management', 'route' => '/dashboard/branches']
                ]
            ],
            ['name' => 'Product Management', 'route' => '/dashboard/products', 'icon' => 'bx-layout', 'auth' => 'admin'],
            ['name' => 'Order Management', 'route' => '/dashboard/order-management', 'icon' => 'bx-dock-top', 'auth' => 'admin'],
            ['name' => 'Order Detail', 'route' => '/dashboard/order-detail', 'icon' => 'bx-dock-top',],
            ['name' => 'Home', 'route' => '/', 'icon' => 'bxs-dashboard'],

        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.sidebar', ['menus' => $this->menus]);
    }
}
