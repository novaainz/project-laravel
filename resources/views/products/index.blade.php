<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background: #f4f6f9; }
        .container { width: 92%; margin: 35px auto; background: white; padding: 30px; border-radius: 16px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); }
        h1, h2 { color: #8B4513; margin-top: 0; }
        .top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
        .form-card { background: #fff8f0; padding: 20px; border-radius: 14px; margin-bottom: 25px; }
        .form-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 12px; }
        input { padding: 10px; border: 1px solid #ddd; border-radius: 8px; width: 100%; box-sizing: border-box; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #8B4513; color: white; padding: 13px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #eee; vertical-align: middle; }
        tr:hover { background: #fff8f0; }
        .btn { padding: 10px 14px; border-radius: 8px; border: none; color: white; cursor: pointer; text-decoration: none; font-size: 14px; }
        .btn-add { background: #8B4513; }
        .btn-update { background: #f0ad4e; }
        .btn-delete { background: #dc3545; }
        .btn-back { background: #6c757d; }
        .actions { display: flex; gap: 8px; }
        .empty { text-align: center; color: #777; padding: 25px; }
    </style>
</head>
<body>

<div class="container">

    <div class="top">
        <div>
            <h1>Daftar Produk Toko Roti</h1>
            <p>Kelola data produk roti dengan mudah.</p>
        </div>
        <a href="/admin/dashboard" class="btn btn-back">Kembali</a>
    </div>

    <!-- FORM TAMBAH -->
    <div class="form-card">
        <h2>Tambah Produk</h2>

        <form action="/products" method="POST">
            @csrf
            <div class="form-grid">
                <input type="text" name="nama" placeholder="Nama produk" required>
                <input type="number" name="harga" placeholder="Harga" required>
                <input type="number" name="stok" placeholder="Stok" required>
                <input type="text" name="deskripsi" placeholder="Deskripsi">
                <input type="text" name="gambar" placeholder="Gambar">
            </div>

            <br>
            <button type="submit" class="btn btn-add">+ Tambah Produk</button>
        </form>
    </div>

    <!-- TABEL -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>

       <tbody>
@forelse($products as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>

        <td><input form="update-{{ $product->id }}" type="text" name="nama" value="{{ $product->nama }}"></td>
        <td><input form="update-{{ $product->id }}" type="number" name="harga" value="{{ $product->harga }}"></td>
        <td><input form="update-{{ $product->id }}" type="number" name="stok" value="{{ $product->stok }}"></td>
        <td><input form="update-{{ $product->id }}" type="text" name="deskripsi" value="{{ $product->deskripsi }}"></td>
        <td><input form="update-{{ $product->id }}" type="text" name="gambar" value="{{ $product->gambar }}"></td>

        <td>
            <div class="actions">
                <form id="update-{{ $product->id }}" action="/products/{{ $product->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-update">Update</button>
                </form>

                <form action="/products/{{ $product->id }}" method="POST" onsubmit="return confirm('Yakin hapus produk ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Hapus</button>
                </form>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="7" class="empty">Belum ada data produk.</td>
    </tr>
@endforelse
</tbody>
    </table>

</div>

</body>
</html>