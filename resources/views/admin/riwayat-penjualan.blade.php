<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Penjualan</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="min-h-screen bg-[#1A0508] text-white font-sans">

<div class="flex min-h-screen bg-gradient-to-br from-[#1A0508] via-[#2b0b18] to-[#FF6B35]">

    <aside class="w-72 min-h-screen bg-white/10 backdrop-blur-xl border-r border-white/10 p-6 shadow-2xl">
        <div class="mb-10">
            <h2 class="text-3xl font-extrabold text-[#FF6B35]">Toko Roti</h2>
            <p class="text-sm text-gray-300 mt-2">Admin Panel</p>
        </div>

        <nav class="space-y-4">
            <a href="/admin/dashboard" class="flex items-center gap-3 px-5 py-4 rounded-2xl text-gray-300 hover:bg-white/10 transition">
                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                <span>Dashboard</span>
            </a>

            <a href="/products" class="flex items-center gap-3 px-5 py-4 rounded-2xl text-gray-300 hover:bg-white/10 transition">
                <i data-lucide="package" class="w-5 h-5"></i>
                <span>Kelola Produk</span>
            </a>

            <a href="/admin/riwayat-penjualan" class="flex items-center gap-3 px-5 py-4 rounded-2xl bg-gradient-to-r from-[#FF6B35] to-purple-700 shadow-lg">
                <i data-lucide="receipt-text" class="w-5 h-5"></i>
                <span>Riwayat Penjualan</span>
            </a>

            <a href="/login" class="flex items-center gap-3 px-5 py-4 rounded-2xl text-gray-300 hover:bg-red-500/20 transition">
                <i data-lucide="log-out" class="w-5 h-5"></i>
                <span>Logout</span>
            </a>
        </nav>
    </aside>

    <main class="flex-1 p-8">

        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-extrabold">Riwayat Penjualan</h1>
                <p class="text-gray-300 mt-2">Catat pesanan dari WhatsApp ke riwayat penjualan toko roti.</p>
            </div>

            <a href="/admin/dashboard" class="bg-white/10 hover:bg-white/20 border border-white/10 px-5 py-3 rounded-2xl transition">
                Kembali
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-500/20 border border-green-500/30 text-green-300 p-4 rounded-2xl mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

            <div class="bg-white/10 border border-white/10 rounded-3xl p-6 shadow-xl">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-300">Total Penjualan</p>
                        <h3 class="text-3xl font-bold mt-2">
                            Rp {{ number_format($sales->sum('total_harga'), 0, ',', '.') }}
                        </h3>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-[#FF6B35] flex items-center justify-center">
                        <i data-lucide="wallet"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/10 border border-white/10 rounded-3xl p-6 shadow-xl">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-300">Total Transaksi</p>
                        <h3 class="text-3xl font-bold mt-2">{{ $sales->count() }}</h3>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center">
                        <i data-lucide="shopping-cart"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white/10 border border-white/10 rounded-3xl p-6 shadow-xl">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-300">Status Sistem</p>
                        <h3 class="text-2xl font-bold mt-2 text-green-400">Aktif</h3>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-green-600 flex items-center justify-center">
                        <i data-lucide="badge-check"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg-white/10 border border-white/10 rounded-3xl p-8 mb-8 shadow-2xl backdrop-blur-xl">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Tambah Penjualan</h2>
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-r from-[#FF6B35] to-purple-700 flex items-center justify-center">
                    <i data-lucide="plus"></i>
                </div>
            </div>

            <form action="/admin/riwayat-penjualan" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <input type="text" name="nama_pembeli" placeholder="Nama Pembeli" required
                           class="bg-black/20 border border-white/10 rounded-2xl px-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35]">

                    <input type="text" name="nama_produk" placeholder="Nama Produk" required
                           class="bg-black/20 border border-white/10 rounded-2xl px-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35]">

                    <input type="number" name="jumlah" placeholder="Jumlah" required
                           class="bg-black/20 border border-white/10 rounded-2xl px-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35]">

                    <input type="number" name="total_harga" placeholder="Total Harga" required
                           class="bg-black/20 border border-white/10 rounded-2xl px-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35]">
                </div>

                <button type="submit"
                        class="mt-6 bg-gradient-to-r from-[#FF6B35] to-purple-700 hover:scale-105 transition px-6 py-4 rounded-2xl font-semibold shadow-xl">
                    + Tambah Penjualan
                </button>
            </form>
        </div>

        <div class="bg-white/10 border border-white/10 rounded-3xl overflow-hidden shadow-2xl backdrop-blur-xl">
            <div class="p-6 border-b border-white/10">
                <h2 class="text-2xl font-bold">Data Penjualan</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-black/20 text-left">
                            <th class="p-5">Kode</th>
                            <th class="p-5">Pembeli</th>
                            <th class="p-5">Produk</th>
                            <th class="p-5">Jumlah</th>
                            <th class="p-5">Tanggal</th>
                            <th class="p-5">Total</th>
                            <th class="p-5">Status</th>
                            <th class="p-5">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($sales as $item)
                            <tr class="border-b border-white/10 hover:bg-white/5 transition">
                                <td class="p-5 font-semibold">{{ $item->kode_transaksi }}</td>
                                <td class="p-5">{{ $item->nama_pembeli }}</td>
                                <td class="p-5">{{ $item->nama_produk }}</td>
                                <td class="p-5">{{ $item->jumlah }}</td>
                                <td class="p-5 text-gray-300">{{ $item->created_at->format('d M Y') }}</td>
                                <td class="p-5 font-bold text-[#FFB199]">
                                    Rp {{ number_format($item->total_harga, 0, ',', '.') }}
                                </td>
                                <td class="p-5">
                                    <span class="bg-green-500/20 text-green-400 px-4 py-2 rounded-xl text-sm">
                                        {{ $item->status }}
                                    </span>
                                </td>
                                <td class="p-5">

    <form action="/admin/riwayat-penjualan/{{ $item->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-xl text-sm transition">

            Hapus

        </button>

    </form>

</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-gray-400 py-10">
                                    Belum ada data penjualan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>

<script>
    lucide.createIcons();
</script>

</body>
</html>