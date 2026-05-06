<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-amber-800 to-orange-200">

    <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-10">

        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-amber-800">
                Login Admin
            </h1>

            <p class="text-gray-500 mt-2">
                Masuk ke Dashboard Toko Roti
            </p>
        </div>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded-xl mb-5">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/login" class="space-y-5">
            @csrf

            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    required
                    class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-amber-700"
                >
            </div>

            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                    class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-amber-700"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-amber-800 hover:bg-amber-900 transition duration-300 text-white font-bold py-3 rounded-xl shadow-lg"
            >
                Login
            </button>
        </form>

    </div>

</body>
</html>