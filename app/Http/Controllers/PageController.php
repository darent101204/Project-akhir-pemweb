<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function delivery()
    {
        return view('delivery');
    }

    public function about()
    {
        return view('about');
    }
}
