<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin</title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ICON -->
    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<body class="min-h-screen flex items-center justify-center bg-[#1A0508] overflow-hidden">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#1A0508] via-[#2b0b18] to-[#FF6B35]"></div>

    <!-- BLUR -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-[#FF6B35]/30 rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-700/30 rounded-full blur-3xl"></div>

    <!-- LOGIN CARD -->
    <div class="relative z-10 w-full max-w-md bg-white/10 backdrop-blur-2xl border border-white/10 rounded-[2rem] shadow-2xl p-10">

        <!-- LOGO -->
        <div class="text-center mb-8">

            <div class="w-24 h-24 mx-auto rounded-full bg-gradient-to-r from-[#FF6B35] to-purple-700 flex items-center justify-center shadow-2xl mb-5">

                <i data-lucide="croissant"
                   class="w-12 h-12 text-white"></i>

            </div>

            <h1 class="text-4xl font-extrabold text-white">
                Login Admin
            </h1>

            <p class="text-gray-300 mt-3">
                Masuk ke Dashboard Toko Roti
            </p>

        </div>

        <!-- ERROR -->
        @if(session('error'))

            <div class="bg-red-500/20 border border-red-500/20 text-red-300 p-4 rounded-2xl mb-6">

                {{ session('error') }}

            </div>

        @endif

        <!-- FORM -->
        <form method="POST" action="/login" class="space-y-6">
            @csrf

            <!-- EMAIL -->
            <div>

                <label class="block mb-3 font-semibold text-gray-200">
                    Email
                </label>

                <div class="relative">

                    <i data-lucide="mail"
                       class="absolute left-4 top-4 w-5 h-5 text-gray-400"></i>

                    <input
                        type="email"
                        name="email"
                        placeholder="Masukkan email"
                        required
                        class="w-full bg-black/20 border border-white/10 rounded-2xl pl-12 pr-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35] focus:ring-2 focus:ring-[#FF6B35]/30 transition"
                    >

                </div>

            </div>

            <!-- PASSWORD -->
            <div>

                <label class="block mb-3 font-semibold text-gray-200">
                    Password
                </label>

                <div class="relative">

                    <i data-lucide="lock"
                       class="absolute left-4 top-4 w-5 h-5 text-gray-400"></i>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                        class="w-full bg-black/20 border border-white/10 rounded-2xl pl-12 pr-4 py-4 text-white placeholder-gray-400 outline-none focus:border-[#FF6B35] focus:ring-2 focus:ring-[#FF6B35]/30 transition"
                    >

                </div>

            </div>

            <!-- BUTTON -->
            <button
                type="submit"
                class="w-full bg-gradient-to-r from-[#FF6B35] to-purple-700 hover:scale-[1.02] transition duration-300 text-white font-bold py-4 rounded-2xl shadow-2xl"
            >

                Login Dashboard

            </button>

        </form>

        <!-- FOOTER -->
        <div class="text-center mt-8">

            <p class="text-sm text-gray-400">
                © 2026 Toko Roti Admin Panel
            </p>

        </div>

    </div>

<script>
    lucide.createIcons();
</script>

</body>
</html>