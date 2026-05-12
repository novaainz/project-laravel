<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-amber-900 text-white p-6 shadow-2xl">

        <h2 class="text-3xl font-bold mb-10">
            Toko Roti
        </h2>

        <nav class="space-y-3">

            <a href="/admin/dashboard"
               class="block px-4 py-3 rounded-xl hover:bg-amber-800 transition duration-300">
                Dashboard
            </a>

            <a href="/products"
               class="block px-4 py-3 rounded-xl hover:bg-amber-800 transition duration-300">
                Kelola Produk
            </a>

            <a href="/login"
               class="block px-4 py-3 rounded-xl bg-red-500 hover:bg-red-600 transition duration-300">
                Logout
            </a>

        </nav>
    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-8">

        <!-- HEADER -->
        <div class="bg-white rounded-3xl shadow-lg p-8 mb-8">

            <h1 class="text-4xl font-bold text-gray-800 mb-3">
                Dashboard Admin Toko Roti
            </h1>

            <p class="text-gray-600 text-lg">
                Selamat datang, Admin. Kelola data produk toko roti dengan mudah.
            </p>

        </div>

       <!-- CARDS -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

    <!-- PRODUK -->
    <div class="bg-white p-6 rounded-3xl shadow-lg hover:scale-105 transition duration-300 text-center">

        <div class="w-20 h-20 rounded-full bg-orange-100 flex items-center justify-center mx-auto mb-4">
            <img src="/images/produk.png" class="w-12 h-12 object-contain">
        </div>

        <h3 class="text-2xl font-bold text-amber-900 mb-2">
            Produk
        </h3>

        <p class="text-gray-600">
            Kelola daftar roti dan makanan.
        </p>
    </div>

    <!-- ADMIN -->
    <div class="bg-white p-6 rounded-3xl shadow-lg hover:scale-105 transition duration-300 text-center">

        <div class="w-20 h-20 rounded-full bg-orange-100 flex items-center justify-center mx-auto mb-4">
            <img src="/images/admin.png" class="w-12 h-12 object-contain">
        </div>

        <h3 class="text-2xl font-bold text-amber-900 mb-2">
            Admin
        </h3>

        <p class="text-gray-600">
            Panel khusus pengelola toko.
        </p>
    </div>

    <!-- STATUS -->
    <div class="bg-white p-6 rounded-3xl shadow-lg hover:scale-105 transition duration-300 text-center">

        <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
            <img src="/images/status.png" class="w-12 h-12 object-contain">
        </div>

        <h3 class="text-2xl font-bold text-amber-900 mb-2">
            Status
        </h3>

        <p class="text-gray-600">
            Sistem berjalan aktif.
        </p>
    </div>

</div>

        <!-- MENU -->
        <div class="bg-white rounded-3xl shadow-lg p-8">

            <h2 class="text-3xl font-bold text-gray-800 mb-6">
                Menu Utama
            </h2>

            <div class="flex flex-wrap gap-4">

                <a href="/products"
                   class="bg-amber-900 hover:bg-amber-800 text-white px-6 py-4 rounded-2xl shadow-md transition duration-300">
                    Lihat & Kelola Produk
                </a>

                <a href="/login"
                   class="bg-red-500 hover:bg-red-600 text-white px-6 py-4 rounded-2xl shadow-md transition duration-300">
                    Logout
                </a>

            </div>

        </div>

    </main>

</div>

</body>
</html>