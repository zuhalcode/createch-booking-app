<?php

namespace App\View\Components;

use App\Models\Company;
use Illuminate\View\Component;

class AppHeader extends Component
{
    public $logo;
    public $slug;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug = '')
    {
        $this->logo = Company::find(1)->logo;
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app-header', [
            'logo' => $this->logo,
            'slug' => $this->slug,
        ]);
    }
}
