<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Produk</title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ICON -->
    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<body class="min-h-screen bg-[#1A0508] text-white font-sans">

<div class="flex min-h-screen bg-gradient-to-br from-[#1A0508] via-[#2b0b18] to-[#FF6B35]">

    <!-- SIDEBAR -->
    <aside class="w-72 min-h-screen bg-white/10 backdrop-blur-xl border-r border-white/10 p-6 shadow-2xl relative">

        <div class="mb-10">

            <h2 class="text-3xl font-extrabold text-[#FF6B35]">
                Toko Roti
            </h2>

            <p class="text-sm text-gray-300 mt-2">
                Admin Panel
            </p>

        </div>

        <nav class="space-y-4">

            <a href="/admin/dashboard"
               class="flex items-center gap-3 px-5 py-4 rounded-2xl text-gray-300 hover:bg-white/10 transition">

                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>

                <span>Dashboard</span>

            </a>

            <a href="/products"
               class="flex items-center gap-3 px-5 py-4 rounded-2xl bg-gradient-to-r from-[#FF6B35] to-purple-700 shadow-lg">

                <i data-lucide="package" class="w-5 h-5"></i>

                <span>Kelola Produk</span>

            </a>

            <a href="/admin/riwayat-penjualan"
               class="flex items-center gap-3 px-5 py-4 rounded-2xl text-gray-300 hover:bg-white/10 transition">

                <i data-lucide="receipt-text" class="w-5 h-5"></i>

                <span>Riwayat Penjualan</span>

            </a>

            <a href="/login"
               class="flex items-center gap-3 px-5 py-4 rounded-2xl text-gray-300 hover:bg-red-500/20 transition">

                <i data-lucide="log-out" class="w-5 h-5"></i>

                <span>Logout</span>

            </a>

        </nav>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-8">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-8">

            <div>

                <h1 class="text-4xl font-extrabold">
                    Kelola Produk
                </h1>

                <p class="text-gray-300 mt-2">
                    Kelola data produk toko roti dengan tampilan modern.
                </p>

            </div>

            <a href="/admin/dashboard"
               class="bg-white/10 hover:bg-white/20 border border-white/10 px-5 py-3 rounded-2xl transition">

                Kembali

            </a>

        </div>

        <!-- CARD -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

            <div class="bg-white/10 border border-white/10 rounded-3xl p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <p class="text-gray-300">
                            Total Produk
                        </p>

                        <h3 class="text-3xl font-bold mt-2">
                            {{ $products->count() }}
                        </h3>

                    </div>

                    <div class="w-14 h-14 rounded-2xl bg-purple-600 flex items-center justify-center">

                        <i data-lucide="package"></i>

                    </div>

                </div>

            </div>

            <div class="bg-white/10 border border-white/10 rounded-3xl p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <p class="text-gray-300">
                            Produk Aktif
                        </p>

                        <h3 class="text-3xl font-bold mt-2">
                            {{ $products->count() }}
                        </h3>

                    </div>

                    <div class="w-14 h-14 rounded-2xl bg-green-600 flex items-center justify-center">

                        <i data-lucide="badge-check"></i>

                    </div>

                </div>

            </div>

            <div class="bg-white/10 border border-white/10 rounded-3xl p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <p class="text-gray-300">
                            Stok Rendah
                        </p>

                      <h3 class="text-3xl font-bold mt-2">
                     {{ \App\Models\Product::where('stok', '<=', 5)->count() }}
                    </h3>

                    </div>

                    <div class="w-14 h-14 rounded-2xl bg-red-500 flex items-center justify-center">

                        <i data-lucide="alert-triangle"></i>

                    </div>

                </div>

            </div>

        </div>

        <!-- FORM -->
        <div class="bg-white/10 border border-white/10 rounded-3xl p-8 mb-8 shadow-2xl backdrop-blur-xl">

            <div class="flex justify-between items-center mb-6">

                <h2 class="text-2xl font-bold">
                    Tambah Produk
                </h2>

                <div class="w-12 h-12 rounded-2xl bg-gradient-to-r from-[#FF6B35] to-purple-700 flex items-center justify-center">

                    <i data-lucide="plus"></i>

                </div>

            </div>

            <form action="/products" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">

                    <input type="text"
                           name="nama"
                           placeholder="Nama produk"
                           required
                           class="bg-black/20 border border-white/10 rounded-2xl px-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35]">

                    <input type="number"
                           name="harga"
                           placeholder="Harga"
                           required
                           class="bg-black/20 border border-white/10 rounded-2xl px-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35]">

                    <input type="number"
                           name="stok"
                           placeholder="Stok"
                           required
                           class="bg-black/20 border border-white/10 rounded-2xl px-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35]">

                    <input type="text"
                           name="deskripsi"
                           placeholder="Deskripsi"
                           class="bg-black/20 border border-white/10 rounded-2xl px-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35]">

                    <div class="relative">

    <input type="file"
           name="gambar"
           id="gambar"
           accept="image/*"
           onchange="previewImage(event)"
           class="hidden">

    <label for="gambar"
           class="flex items-center justify-center gap-3 bg-black/20 hover:bg-black/30 border border-white/10 rounded-2xl px-5 py-4 cursor-pointer transition text-gray-300">

        <i data-lucide="image-plus"
           class="w-5 h-5 text-[#FF6B35]"></i>

        <span>Pilih Gambar</span>

    </label>

</div>

                </div>

                <div class="mt-5">

                    <img id="preview"
                         onclick="showImage(this.src)"
                         class="w-24 h-24 object-cover rounded-2xl hidden cursor-pointer border border-white/10 shadow-lg">

                </div>

                <button type="submit"
                        class="mt-6 bg-gradient-to-r from-[#FF6B35] to-purple-700 hover:scale-105 transition px-6 py-4 rounded-2xl font-semibold shadow-xl">

                    + Tambah Produk

                </button>

            </form>

        </div>

        <!-- TABLE -->
        <div class="bg-white/10 border border-white/10 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-xl">

            <div class="p-6 border-b border-white/10">

                <div class="flex justify-between items-center">

                    <h2 class="text-2xl font-bold">
                        Daftar Produk
                    </h2>

                    <div class="relative">

                        <form method="GET" action="/products">

    <input type="text"
           name="search"
           value="{{ request('search') }}"
           placeholder="Cari produk..."
           class="bg-black/20 border border-white/10 rounded-2xl px-5 py-3 pl-12 text-white placeholder-gray-400 outline-none w-full">

</form>

                        <i data-lucide="search"
                           class="absolute left-4 top-3.5 w-5 h-5 text-gray-400"></i>

                    </div>

                </div>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead>

                        <tr class="bg-black/20 text-left">

                            <th class="p-5">No</th>
                            <th class="p-5">Nama</th>
                            <th class="p-5">Harga</th>
                            <th class="p-5">Stok</th>
                            <th class="p-5">Deskripsi</th>
                            <th class="p-5">Gambar</th>
                            <th class="p-5">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($products as $product)

                        <tr class="border-b border-white/10 hover:bg-white/5 transition">

                            <td class="p-4">
                                {{ $loop->iteration }}
                            </td>

                            <td class="p-4">

                                <input type="text"
                                       name="nama"
                                       value="{{ $product->nama }}"
                                       form="update-{{ $product->id }}"
                                       class="bg-black/20 border border-white/10 rounded-xl px-3 py-2 w-full text-white">

                            </td>

                            <td class="p-4">

                                <input type="number"
                                       name="harga"
                                       value="{{ $product->harga }}"
                                       form="update-{{ $product->id }}"
                                       class="bg-black/20 border border-white/10 rounded-xl px-3 py-2 w-full text-white">

                            </td>

                            <td class="p-4">

                                <input type="number"
                                       name="stok"
                                       value="{{ $product->stok }}"
                                       form="update-{{ $product->id }}"
                                       class="bg-black/20 border border-white/10 rounded-xl px-3 py-2 w-full text-white">

                            </td>

                            <td class="p-4">

                                <input type="text"
                                       name="deskripsi"
                                       value="{{ $product->deskripsi }}"
                                       form="update-{{ $product->id }}"
                                       class="bg-black/20 border border-white/10 rounded-xl px-3 py-2 w-full text-white">

                            </td>

                            <td class="p-4">

                                @if($product->gambar)

                                    <img id="preview-update-{{ $product->id }}"
                                         src="{{ asset('storage/' . $product->gambar) }}?v={{ time() }}"
                                         onclick="showImage(this.src)"
                                         class="w-24 h-24 object-cover rounded-2xl border border-white/10 mb-3 cursor-pointer shadow-lg">

                                @else

                                    <img id="preview-update-{{ $product->id }}"
                                         class="w-24 h-24 object-cover rounded-2xl border border-white/10 mb-3 hidden">

                                @endif

                                <div class="relative">

                                 <input type="file"
           name="gambar"
           id="gambar-{{ $product->id }}"
           accept="image/*"
           form="update-{{ $product->id }}"
           onchange="previewUpdateImage(event, {{ $product->id }})"
           class="hidden">

    <label for="gambar-{{ $product->id }}"
           class="flex items-center justify-center gap-2 bg-black/20 hover:bg-black/30 border border-white/10 rounded-xl px-4 py-3 cursor-pointer transition text-sm text-gray-300">

        <i data-lucide="upload"
           class="w-4 h-4 text-[#FF6B35]"></i>

        <span>Upload</span>

    </label>

</div>

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
                                                class="bg-yellow-500 hover:bg-yellow-600 px-4 py-3 rounded-xl text-white transition">

                                            Update

                                        </button>

                                    </form>

                                   <form id="delete-form-{{ $product->id }}"
      action="/products/{{ $product->id }}"
      method="POST">

    @csrf
    @method('DELETE')

    <button type="button"
            onclick="confirmDelete('delete-form-{{ $product->id }}')"
            class="bg-red-600 hover:bg-red-700 px-4 py-3 rounded-xl text-white transition">

        Hapus

    </button>

</form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="7" class="text-center text-gray-400 py-10">

                                Belum ada data produk.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </main>

</div>

<!-- MODAL -->
<div id="imageModal"
     class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50"
     onclick="closeImage()">

    <img id="modalImage"
         class="max-w-[90%] max-h-[90%] rounded-3xl shadow-2xl">

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

function confirmDelete(formId) {

    Swal.fire({

        title: 'Hapus Produk?',
        text: "Produk akan dihapus permanen!",
        icon: 'warning',

        background: '#2b0b18',
        color: '#ffffff',

        showCancelButton: true,

        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#6b7280',

        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal',

        borderRadius: '20px'

    }).then((result) => {

        if (result.isConfirmed) {

            document.getElementById(formId).submit();

        }

    });

}

lucide.createIcons();

</script>

</body>
</html>