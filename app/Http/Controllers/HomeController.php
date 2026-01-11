<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured products for "Popular Now" section
        $featuredProducts = \App\Models\Product::where('is_featured', true)->take(3)->get();
        
        // Get all products for "Special Menu" section
        $specialProducts = \App\Models\Product::latest()->take(6)->get();
        
        return view('home', compact('featuredProducts', 'specialProducts'));
    }
}
