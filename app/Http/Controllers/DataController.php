<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showProducts()
    {

        $picksProducts = dataset('picksProducts');
        $forYouProducts = dataset('forYouProducts');
        $paymentSlider = dataset('paymentSlider');

        return view('pages.home', [
            'picksProducts' => $picksProducts,
            'forYouProducts' => $forYouProducts,
            'paymentSlider' => $paymentSlider,
        ]);
    }
}

