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
            ['name' => 'Dashboard', 'route' => '/dashboard', 'icon' => 'bxs-dashboard'],
            [
                'name' => 'Homepage Management', 
                'route' => '', 
                'icon' => 'bx-home-circle', 
                'submenu' => [
                    ['name' => 'Landing Page Management', 'route' => '/dashboard/landing-page'],
                    ['name' => 'Branch Management', 'route' => '/dashboard/branches']
                ]
            ],
            ['name' => 'Products Management', 'route' => '/dashboard/products', 'icon' => 'bx-layout'],
            ['name' => 'Orders Management', 'route' => '/dashboard/orders', 'icon' => 'bx-dock-top'],
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
