<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreadhouseController extends Controller
{

    // HOME
    public function home()
    {
        return view('home');
    }

    // PRODUK
    public function produk()
    {

        $products = [

            [
                'nama' => 'Roti Almond',
                'harga' => 'Rp 20.000',
                'gambar' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=1200&auto=format&fit=crop'
            ],

            [
                'nama' => 'Roti Cokelat',
                'harga' => 'Rp 18.000',
                'gambar' => 'https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=1200&auto=format&fit=crop'
            ],

            [
                'nama' => 'Roti Keju',
                'harga' => 'Rp 19.000',
                'gambar' => 'https://images.unsplash.com/photo-1608198093002-ad4e005484ec?q=80&w=1200&auto=format&fit=crop'
            ],

            [
                'nama' => 'Roti Sosis',
                'harga' => 'Rp 22.000',
                'gambar' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?q=80&w=1200&auto=format&fit=crop'
            ],

            [
                'nama' => 'Roti Garlic',
                'harga' => 'Rp 24.000',
                'gambar' => 'https://images.unsplash.com/photo-1483695028939-5bb13f8648b0?q=80&w=1200&auto=format&fit=crop'
            ],

            [
                'nama' => 'Roti Strawberry',
                'harga' => 'Rp 21.000',
                'gambar' => 'https://images.unsplash.com/photo-1519869325930-281384150729?q=80&w=1200&auto=format&fit=crop'
            ],

        ];

        return view('produk', compact('products'));
    }


    // ORDER
    public function order()
    {
        return view('order');
    }

    // RIWAYAT PEMESANAN
    public function riwayat()
    {

        // Dummy Data
        $orders = [

            [
                'id' => '#TBH240518-001',
                'tanggal' => '18 Mei 2024 • 10:23',
                'status' => 'Selesai',
                'produk' => 5,
                'total' => 'Rp 152.000',
            ],

            [
                'id' => '#TBH240516-002',
                'tanggal' => '16 Mei 2024 • 14:45',
                'status' => 'Selesai',
                'produk' => 4,
                'total' => 'Rp 98.000',
            ],

            [
                'id' => '#TBH240515-003',
                'tanggal' => '15 Mei 2024 • 09:12',
                'status' => 'Selesai',
                'produk' => 6,
                'total' => 'Rp 210.500',
            ],

        ];

        return view('riwayat', compact('orders'));
    }
}