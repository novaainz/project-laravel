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

        // Ambil produk berdasarkan id
        $product = Product::findOrFail($id);

        // Produk lainnya
        $relatedProducts = Product::where('id', '!=', $id)
                            ->latest()
                            ->take(4)
                            ->get();

        return view('detail', compact(
            'product',
            'relatedProducts'
        ));

    }

    // ORDER
    public function order()
    {
        return view('order');
    }
}