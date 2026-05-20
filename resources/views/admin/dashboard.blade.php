<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin</title>

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

            <!-- DASHBOARD -->
            <a href="/admin/dashboard"
               class="flex items-center gap-3 px-5 py-4 rounded-2xl bg-gradient-to-r from-[#FF6B35] to-purple-700 shadow-lg">

                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>

                <span>Dashboard</span>

            </a>

            <!-- KELOLA PRODUK -->
            <a href="/products"
               class="flex items-center gap-3 px-5 py-4 rounded-2xl text-gray-300 hover:bg-white/10 hover:text-white transition">

                <i data-lucide="package" class="w-5 h-5"></i>

                <span>Kelola Produk</span>

            </a>

            <!-- RIWAYAT -->
            <a href="/admin/riwayat-penjualan"
               class="flex items-center justify-between px-5 py-4 rounded-2xl text-gray-300 hover:bg-white/10 hover:text-white transition">

                <div class="flex items-center gap-3">

                    <i data-lucide="receipt-text" class="w-5 h-5"></i>

                    <span>Riwayat Penjualan</span>

                </div>

                <span class="text-xs bg-[#FF6B35] px-2 py-1 rounded-full">
                    Baru
                </span>

            </a>

            <!-- LOGOUT -->
            <a href="/login"
               class="flex items-center gap-3 px-5 py-4 rounded-2xl text-gray-300 hover:bg-red-500/20 hover:text-red-300 transition">

                <i data-lucide="log-out" class="w-5 h-5"></i>

                <span>Logout</span>

            </a>

        </nav>

        <!-- BOX -->
        <div class="absolute bottom-6 left-6 right-6 bg-gradient-to-r from-[#FF6B35]/80 to-purple-700/80 rounded-3xl p-5 shadow-xl">

            <p class="font-bold">
                Roti lezat, hari hebat!
            </p>

            <p class="text-sm text-gray-200 mt-1">
                Kelola toko roti dengan mudah.
            </p>

        </div>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-8">

        <!-- TOP -->
        <div class="flex justify-between items-center mb-8">

            <div>

                <h1 class="text-4xl font-extrabold">
                    Dashboard Admin
                </h1>

                <p class="text-gray-300 mt-2">
                    Selamat datang, Admin. Kelola data produk toko roti dengan mudah.
                </p>

            </div>

            <div class="hidden md:flex items-center gap-4 bg-white/10 border border-white/10 rounded-2xl px-5 py-3">

                <span class="text-sm text-gray-300">
                    Admin
                </span>

                <div class="w-10 h-10 rounded-full bg-[#FF6B35] flex items-center justify-center font-bold">
                    A
                </div>

            </div>

        </div>

        <!-- HERO -->
        <div class="relative overflow-hidden bg-white/10 border border-white/10 rounded-[2rem] p-8 mb-8 shadow-2xl">

            <div class="relative z-10">

                <p class="text-sm uppercase tracking-widest text-[#FFB199] font-semibold">
                    Bakery Admin System
                </p>

                <h2 class="text-4xl font-extrabold mt-3 mb-4 max-w-2xl">
                    Kelola produk, stok, dan penjualan lebih cepat dan profesional.
                </h2>

                <p class="text-gray-300 max-w-2xl">
                    Dashboard ini digunakan untuk mengatur data produk, melihat status sistem,
                    dan memantau riwayat penjualan toko roti.
                </p>

                <div class="flex flex-wrap gap-4 mt-6">

                    <a href="/products"
                       class="bg-gradient-to-r from-[#FF6B35] to-purple-700 hover:scale-105 transition px-6 py-3 rounded-2xl shadow-lg font-semibold">

                        Kelola Produk

                    </a>

                    <a href="/admin/riwayat-penjualan"
                       class="bg-white/10 hover:bg-white/20 border border-white/10 px-6 py-3 rounded-2xl transition font-semibold">

                        Lihat Riwayat Penjualan

                    </a>

                </div>

            </div>

            <div class="absolute right-10 top-8 text-9xl opacity-20">
                
            </div>

        </div>

        <!-- CARD -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

            <!-- PRODUK -->
            <div class="bg-white/10 border border-white/10 rounded-3xl p-6 shadow-xl hover:scale-105 transition">

                <div class="w-14 h-14 rounded-2xl bg-purple-600 flex items-center justify-center text-2xl mb-5">

                    <i data-lucide="package"></i>

                </div>

                <p class="text-gray-300">
                    Total Produk
                </p>

                <h3 class="text-3xl font-extrabold mt-2">
                    {{ \App\Models\Product::count() }}
                </h3>

                <p class="text-sm text-green-400 mt-2">
                    Produk tersedia
                </p>

            </div>

            <!-- PENJUALAN -->
            <div class="bg-white/10 border border-white/10 rounded-3xl p-6 shadow-xl hover:scale-105 transition">

                <div class="w-14 h-14 rounded-2xl bg-[#FF6B35] flex items-center justify-center text-2xl mb-5">

                    <i data-lucide="wallet"></i>

                </div>

                <p class="text-gray-300">
                    Penjualan Hari Ini
                </p>

                <h3 class="text-3xl font-extrabold mt-2">
                    Rp {{ number_format(\App\Models\Product::sum('harga'), 0, ',', '.') }}
                </h3>

                <p class="text-sm text-green-400 mt-2">
                    +12.5% dari kemarin
                </p>

            </div>

            <!-- TRANSAKSI -->
            <div class="bg-white/10 border border-white/10 rounded-3xl p-6 shadow-xl hover:scale-105 transition">

                <div class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center text-2xl mb-5">

                    <i data-lucide="shopping-cart"></i>

                </div>

                <p class="text-gray-300">
                    Total Transaksi
                </p>

                <h3 class="text-3xl font-extrabold mt-2">
                    {{ \App\Models\Product::count() }}
                </h3>

                <p class="text-sm text-gray-400 mt-2">
                    Transaksi hari ini
                </p>

            </div>

            <!-- STOK -->
            <div class="bg-white/10 border border-white/10 rounded-3xl p-6 shadow-xl hover:scale-105 transition">

                <div class="w-14 h-14 rounded-2xl bg-red-500 flex items-center justify-center text-2xl mb-5">

                    <i data-lucide="alert-triangle"></i>

                </div>

                <p class="text-gray-300">
                    Stok Rendah
                </p>

                <h3 class="text-3xl font-extrabold mt-2">
                    {{ \App\Models\Product::where('stok', '<=', 5)->count() }}
                </h3>

                <p class="text-sm text-red-300 mt-2">
                    Perlu restock
                </p>

            </div>

        </div>

        <!-- BOTTOM SECTION -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- CHART -->
            <div class="lg:col-span-2 bg-white/10 border border-white/10 rounded-3xl p-6 shadow-2xl backdrop-blur-xl">

                <div class="flex justify-between items-center mb-6">

                    <h3 class="text-xl font-bold text-white">
                        Grafik Penjualan
                    </h3>

                    <button class="bg-black/30 text-sm px-4 py-2 rounded-xl border border-white/10">
                        7 Hari Terakhir
                    </button>

                </div>

                <div class="bg-black/20 rounded-2xl p-4 h-72">

                    <canvas id="salesChart"></canvas>

                </div>

            </div>

<!-- PENJUALAN REAL -->
<div class="bg-white/10 border border-white/10 rounded-3xl p-6 shadow-2xl backdrop-blur-xl">

    <div class="flex justify-between items-center mb-6">

        <h3 class="text-xl font-bold">
            Penjualan Terbaru
        </h3>

        <a href="/admin/riwayat-penjualan"
           class="text-[#FF6B35] text-sm hover:underline">

            Lihat Semua →

        </a>

    </div>

    <div class="space-y-5">

        @php
            $sales = \App\Models\Sale::latest()->take(4)->get();
        @endphp

        @forelse($sales as $sale)

            <div class="flex justify-between items-start border-b border-white/10 pb-4">

                <div>

                    <p class="font-semibold text-white">
                        {{ $sale->kode_transaksi }}
                    </p>

                    <p class="text-sm text-gray-400 mt-1">
                        {{ $sale->created_at->format('d M Y, H:i') }}
                    </p>

                </div>

                <div class="text-right">

                    <p class="font-bold text-white">
                        Rp {{ number_format($sale->total_harga, 0, ',', '.') }}
                    </p>

                    <p class="text-green-400 text-sm">
                        {{ $sale->status }}
                    </p>

                </div>

            </div>

        @empty

            <div class="text-center text-gray-400 py-10">

                Belum ada transaksi penjualan.

            </div>

        @endforelse

    </div>

</div>

                </div>

            </div>

        </div>

    </main>

</div>

<!-- CHART JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

lucide.createIcons();


// CHART PENJUALAN
const ctx = document.getElementById('salesChart');

if(ctx){

    new Chart(ctx, {

        type: 'line',

        data: {

            labels: @json(\App\Models\Sale::pluck('created_at')->map(fn($d) => $d->format('d M'))),

            datasets: [{

                label: 'Penjualan',

                data: @json(\App\Models\Sale::pluck('total_harga')),

                borderColor: '#FF6B35',

                backgroundColor: 'rgba(255,107,53,0.2)',

                tension: 0.4,

                fill: true,

                pointBackgroundColor: '#FF6B35',

                pointBorderColor: '#fff',

                pointRadius: 5,

                pointHoverRadius: 7

            }]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

                legend: {

                    labels: {

                        color: '#ffffff'

                    }

                }

            },

            scales: {

                x: {

                    ticks: {

                        color: '#cccccc'

                    },

                    grid: {

                        color: 'rgba(255,255,255,0.05)'

                    }

                },

                y: {

                    ticks: {

                        color: '#cccccc'

                    },

                    grid: {

                        color: 'rgba(255,255,255,0.05)'

                    }

                }

            }

        }

    });

}

</script>

</body>
</html>