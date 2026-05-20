<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('deskripsi', compact('products'));
    }

    public function store(Request $request)
    {
        return back();
    }

    public function checkout(Request $request)
    {
        return "Pesanan berhasil!";
    }
}