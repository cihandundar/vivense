<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showProducts()
    {
        // İlgili verileri yükleyin
        $picksProducts = dataset('picksProducts');
        $forYouProducts = dataset('forYouProducts');

        // Verileri view'a gönderin
        return view('pages.home', [
            'picksProducts' => $picksProducts,
            'forYouProducts' => $forYouProducts
        ]);
    }
}

