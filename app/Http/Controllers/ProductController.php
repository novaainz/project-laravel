<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {
        Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar
        ]);

        return redirect()->back();
    }

        public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar
        ]);

        return redirect()->back();
    }

        public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }
}
