<!DOCTYPE html>
<html>
<head>
    <title>Produk Roti</title>
</head>
<body>
<h2>Tambah Produk</h2>

<!-- logout -->
 <form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

<hr>

<!-- Form tambah produk -->
<form action="/products" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama Produk" required><br><br>
    
    <input type="number" name="harga" placeholder="Harga" required><br><br>
    
    <input type="number" name="stok" placeholder="Stok" required><br><br>
    
    <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br><br>

    <button type="submit">Tambah Produk</button>
</form>

<hr>

    <h1>Daftar Produk Roti</h1>

    @foreach ($products as $product)
        <div style="margin-bottom: 10px;">
            <h3>{{ $product->nama }}</h3>
            <p>Harga: {{ $product->harga }}</p>
            <p>Stok: {{ $product->stok }}</p>

        <!-- Form hapus produk -->
        <form action="/products/{{ $product->id }}" method="POST" style="display:inline;">
            @csrf
             @method('DELETE')
             <button type="submit">Hapus</button>
        </form>

        <!--update produk-->
        <h4>Edit Produk</h4>

        <form action="/products/{{ $product->id }}" method="POST">
         @csrf
            @method('PUT')

             <input type="text" name="nama" value="{{ $product->nama }}"><br><br>
             <input type="number" name="harga" value="{{ $product->harga }}"><br><br>
             <input type="number" name="stok" value="{{ $product->stok }}"><br><br>
             <textarea name="deskripsi">{{ $product->deskripsi }}</textarea><br><br>

             <button type="submit">Update</button>
        </form>

            <hr>
        </div>
    @endforeach

</body>
</html>