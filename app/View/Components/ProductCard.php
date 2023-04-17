<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $img;
    public $price;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $price, )
    {
        $this->img = $img;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app.product-card');
    }
}
