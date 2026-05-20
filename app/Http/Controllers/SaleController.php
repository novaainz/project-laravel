<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::latest()->get();

        return view('admin.riwayat-penjualan', compact('sales'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required',
            'nama_produk' => 'required',
            'jumlah' => 'required|numeric',
            'total_harga' => 'required|numeric',
        ]);

        Sale::create([
            'kode_transaksi' => 'TRX-' . rand(1000, 9999),
            'nama_pembeli' => $request->nama_pembeli,
            'nama_produk' => $request->nama_produk,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
            'status' => 'Selesai',
        ]);

        return redirect()->back()->with('success', 'Penjualan berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $sale = Sale::findOrFail($id);

        $sale->delete();

        return redirect()->back()->with('success', 'Data penjualan berhasil dihapus');
    }
}