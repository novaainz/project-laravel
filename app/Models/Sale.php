<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'nama_pembeli',
        'nama_produk',
        'jumlah',
        'total_harga',
        'status'
    ];
}