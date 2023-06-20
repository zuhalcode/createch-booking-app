<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

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
        $slug = Route::current()->parameter('slug');
        $this->menus = [
            [
                "name" => "Dashboard",
                "route" => "/$slug/dashboard",
                "icon" => "bx-line-chart",
                "role" => "admin-company"
            ],
            [
                "name" => "Companies Management", "route" => "", "icon" => "bx-home-circle", "role" => "super-admin",
                "submenu" => [
                    ["name" => "List Companies", "route" => "/$slug/dashboard/companies"],
                    ["name" => "User Management", "route" => "/$slug/dashboard/users"],
                ],
            ],

            [
                "name" => "Company Management", "route" => "", "icon" => "bx-home-circle", "role" => "admin-company",
                "submenu" => [
                    ["name" => "Company Detail", "route" => "/$slug/dashboard/company"],
                    ["name" => "Landing Page Management", "route" => "/$slug/dashboard/landing-page"],
                    ["name" => "List Branch", "route" => "/$slug/dashboard/branches"],
                    ["name" => "Create Branch", "route" => "/$slug/dashboard/branches/create"],
                ]
            ],
            [
                "name" => "Product Management", "route" => "", "icon" => "bx-store-alt", "role" => "admin-company",
                "submenu" => [
                    ["name" => "List Product", "route" => "/$slug/dashboard/products"],
                    ["name" => "Create Product", "route" => "/$slug/dashboard/products/create"],
                    ["name" => "Slot Management", "route" => "/$slug/dashboard/slots"],
                ]
            ],
            [
                "name" => "Order Management",
                "route" => "/$slug/dashboard/orders",
                "icon" => "bxs-receipt",
                "role" => "admin-branch"
            ],
            [
                "name" => "Home",
                "route" => "/$slug",
                "icon" => "bxs-dashboard",
                "role" => "customer"
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
        return view("components.dashboard.sidebar", ["menus" => $this->menus]);
    }
}
