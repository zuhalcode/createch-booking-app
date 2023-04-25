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
            [
                'name' => 'Dashboard',
                'route' => '/dashboard', 
                'icon' => 'bxs-dashboard', 
                'role' => 'admin'
            ],
            [
                'name' => 'Companies Management', 
                'route' => '/companies', 'icon' => 
                'bxs-dashboard', 
                'role' => 'super-admin'
            ],
            ['name' => 'Homepage Management', 'route' => '', 'icon' => 'bx-home-circle', 'role' => 'admin',
                'submenu' => [
                    ['name' => 'Company Management', 'route' => '/dashboard/company'],
                    ['name' => 'Landing Page Management', 'route' => '/dashboard/landing-page'],
                    ['name' => 'Branch Management', 'route' => '/dashboard/branches']
                ]
            ],
            [
                'name' => 'Product Management', 
                'route' => '/dashboard/products', 
                'icon' => 'bx-layout', 
                'role' => 'admin'
            ],
            [
                'name' => 'Order Management', 
                'route' => '/dashboard/order-management', 
                'icon' => 'bx-dock-top', 
                'role' => 'admin'
            ],
            [
                'name' => 'Order Detail', 
                'route' => '/dashboard/order-detail', 
                'icon' => 'bx-dock-top', 
                'role' => 'customer'
            ],
            [
                'name' => 'Home', 
                'route' => '/', 
                'icon' => 'bxs-dashboard', 
                'role' => 'customer'
            ],

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
