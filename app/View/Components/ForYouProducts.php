<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ForYouProducts extends Component
{
    public $forYouProducts;

    public function __construct()
    {
        $this->forYouProducts = include(base_path('database/data_sets/forYouProducts.php'));
    }

    public function render()
    {
        return view('components.for-you-products');
    }
}
