<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<div class="w-[92%] mx-auto mt-10 bg-white p-8 rounded-2xl shadow-lg">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-amber-900">Daftar Produk Toko Roti</h1>
            <p class="text-gray-600 mt-2">Kelola data produk roti dengan mudah.</p>
        </div>

        <a href="/admin/dashboard"
           class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-2 rounded-lg transition">
            Kembali
        </a>
    </div>

    <!-- FORM TAMBAH -->
    <div class="bg-amber-50 p-6 rounded-2xl mb-8 border border-amber-100">
        <h2 class="text-xl font-bold text-amber-900 mb-4">Tambah Produk</h2>

        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <input class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-700 outline-none"
                       type="text" name="nama" placeholder="Nama produk" required>

                <input class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-700 outline-none"
                       type="number" name="harga" placeholder="Harga" required>

                <input class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-700 outline-none"
                       type="number" name="stok" placeholder="Stok" required>

                <input class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-700 outline-none"
                       type="text" name="deskripsi" placeholder="Deskripsi">

                <input class="border rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-700 outline-none"
                       type="file" name="gambar" accept="image/*" onchange="previewImage(event)">
            </div>

            <div class="mt-2">
                <img id="preview"
                     onclick="showImage(this.src)"
                     class="w-20 h-20 object-cover rounded hidden cursor-pointer">
            </div>

            <button type="submit"
                    class="mt-5 bg-amber-900 hover:bg-amber-800 text-white px-5 py-3 rounded-lg transition">
                + Tambah Produk
            </button>
        </form>
    </div>

    <!-- TABEL -->
    <div class="overflow-x-auto rounded-xl border border-gray-200">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-amber-900 text-white">
                    <th class="p-4 text-left">No</th>
                    <th class="p-4 text-left">Nama</th>
                    <th class="p-4 text-left">Harga</th>
                    <th class="p-4 text-left">Stok</th>
                    <th class="p-4 text-left">Deskripsi</th>
                    <th class="p-4 text-left">Gambar</th>
                    <th class="p-4 text-left">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($products as $product)
                    <tr class="hover:bg-amber-50 border-b">

                        <td class="p-4">{{ $loop->iteration }}</td>

                        <td class="p-3">
                            <input type="text"
                                   name="nama"
                                   value="{{ $product->nama }}"
                                   form="update-{{ $product->id }}"
                                   class="border rounded-lg px-3 py-2 w-full">
                        </td>

                        <td class="p-3">
                            <input type="number"
                                   name="harga"
                                   value="{{ $product->harga }}"
                                   form="update-{{ $product->id }}"
                                   class="border rounded-lg px-3 py-2 w-full">
                        </td>

                        <td class="p-3">
                            <input type="number"
                                   name="stok"
                                   value="{{ $product->stok }}"
                                   form="update-{{ $product->id }}"
                                   class="border rounded-lg px-3 py-2 w-full">
                        </td>

                        <td class="p-3">
                            <input type="text"
                                   name="deskripsi"
                                   value="{{ $product->deskripsi }}"
                                   form="update-{{ $product->id }}"
                                   class="border rounded-lg px-3 py-2 w-full">
                        </td>

                        <td class="p-3">

                            @if($product->gambar)
                                <img id="preview-update-{{ $product->id }}"
                                     src="{{ asset('storage/' . $product->gambar) }}?v={{ time() }}"
                                     onclick="showImage(this.src)"
                                     class="w-20 h-20 object-cover rounded-lg border mb-2 cursor-pointer">
                            @else
                                <img id="preview-update-{{ $product->id }}"
                                     onclick="showImage(this.src)"
                                     class="w-20 h-20 object-cover rounded-lg border mb-2 hidden cursor-pointer">
                            @endif

                            <input type="file"
                                   name="gambar"
                                   accept="image/*"
                                   form="update-{{ $product->id }}"
                                   onchange="previewUpdateImage(event, {{ $product->id }})"
                                   class="border rounded px-2 py-1 w-full">

                        </td>

                        <td class="p-4">
                            <div class="flex gap-2">

                                <form id="update-{{ $product->id }}"
                                      action="/products/{{ $product->id }}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit"
                                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition">
                                        Update
                                    </button>
                                </form>

                                <form action="/products/{{ $product->id }}" method="POST"
                                      onsubmit="return confirm('Yakin hapus produk ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">
                                        Hapus
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-gray-500 p-8">
                            Belum ada data produk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<div id="imageModal"
     class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50"
     onclick="closeImage()">

    <img id="modalImage"
         class="max-w-[90%] max-h-[90%] rounded-lg shadow-lg">
</div>

<script>
function previewImage(event) {
    const preview = document.getElementById('preview');

    preview.src = URL.createObjectURL(event.target.files[0]);
    preview.classList.remove('hidden');
}

function previewUpdateImage(event, id) {
    const preview = document.getElementById('preview-update-' + id);

    preview.src = URL.createObjectURL(event.target.files[0]);
    preview.classList.remove('hidden');
}

function showImage(src) {
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModal').classList.remove('hidden');
    document.getElementById('imageModal').classList.add('flex');
}

function closeImage() {
    document.getElementById('imageModal').classList.add('hidden');
    document.getElementById('imageModal').classList.remove('flex');
}
</script>

</body>
</html>