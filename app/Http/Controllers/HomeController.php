<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    // public function index()
    // {
    //     $products = Product::all(); // ambil data
    //     return view('home', compact('products'));
    // }

    public function index() 
    { 
        $products = []; // sementara kosong 
        return view('home', compact('products')); 
    }
}