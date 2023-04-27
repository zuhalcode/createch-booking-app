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
                'icon' => 'bx-line-chart', 
                'role' => 'admin'
            ],
            [
                'name' => 'Companies Management', 
                'route' => '/dashboard/companies', 
                'icon' => 'bx-building', 
                'role' => 'super-admin'
            ],
            
            ['name' => 'Company Management', 'route' => '', 'icon' => 'bx-home-circle', 'role' => 'admin',
                'submenu' => [
                    ['name' => 'Company Detail', 'route' => '/dashboard/company'],
                    ['name' => 'Landing Page Management', 'route' => '/dashboard/landing-page'],
                    ['name' => 'List Branch', 'route' => '/dashboard/branches'],
                    ['name' => 'Create Branch', 'route' => '/dashboard/branches/create'],
                ]
            ],
            ['name' => 'Product Management', 'route' => '', 'icon' => 'bx-store-alt', 'role' => 'admin',
                'submenu' => [
                    ['name' => 'List Product', 'route' => '/dashboard/products'],
                    ['name' => 'Create Product', 'route' => '/dashboard/products/create'],
                    ['name' => 'Slot Management', 'route' => '/dashboard/slots'],
                ]
            ],
            [
                'name' => 'Order Management', 
                'route' => '/dashboard/order-management', 
                'icon' => 'bxs-receipt', 
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
