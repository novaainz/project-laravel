<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BreadhouseController extends Controller
{

    

    // HOME
    public function home()
    {
        return view('home');
    }

    //produk
    public function produk()
    {
    $products = Product::all();

        return view('produk', compact('products'));
    }

    //DETAIL
    public function detail($id)
    {

    $product = Product::findOrFail($id);

        return view('detail', compact('product'));

    }

    // ORDER
    public function order()
    {
        return view('order');
    }
}