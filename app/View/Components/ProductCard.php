<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $img;
    public $price;
    public $href;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $price, $href)
    {
        $this->img = $img;
        $this->price = $price;
        $this->href = $href;
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
