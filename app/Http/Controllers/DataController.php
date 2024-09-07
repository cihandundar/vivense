<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function pickProducts()
    {
        return view('pages.home', [
            'picksProducts' => dataset('picksProducts'),
            'forYouProducts' => dataset('forYouProducts')
        ]);
    }
}
