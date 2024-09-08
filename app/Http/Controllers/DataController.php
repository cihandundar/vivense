<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showProducts()
    {
        return view('pages.home', [
            'picksProducts' => dataset('picksProducts'),
            'forYouProducts' => dataset('forYouProducts'),
            'paymentSlider' => dataset('paymentSlider'),
            'popularCategory' => dataset('popularCategory'),
        ]);
    }
}

