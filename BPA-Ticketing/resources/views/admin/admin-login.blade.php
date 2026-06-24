<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Admin Center - Super Admin Login</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-[#5c1d1d] overflow-hidden">

<div class="w-full min-h-screen grid grid-cols-1 lg:grid-cols-2">

    <!-- KIRI -->
    <div class="flex flex-col justify-center px-12 lg:px-24 text-white">

        <div class="mb-4 text-sm text-gray-300">
        </div>

        <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight">
            BPA Admin <br>
            Center
        </h1>

        <p class="mt-8 text-xl text-gray-200 max-w-lg leading-relaxed">
            Akses terpusat untuk memantau ticket, menjawab pertanyaan,
            mengelola pengguna, dan melihat rekap layanan BPA secara real-time.
        </p>

        <div class="mt-12 flex gap-4 flex-wrap">

            <div class="bg-white/10 backdrop-blur px-5 py-3 rounded-2xl">
                Audit Log
            </div>

            <div class="bg-white/10 backdrop-blur px-5 py-3 rounded-2xl">
                Kelola Ticket
            </div>

            <div class="bg-white/10 backdrop-blur px-5 py-3 rounded-2xl">
                Dashboard
            </div>

        </div>

    </div>

    <!-- KANAN -->
    <div class="flex items-center justify-center p-8 lg:p-16">

        <div class="bg-white w-full max-w-lg rounded-[40px] p-10 lg:p-12 shadow-2xl">

            <h2 class="text-4xl font-bold text-center text-black">
                Super Admin Login
            </h2>

            <p class="text-center text-gray-500 mt-3">
                Portal khusus pegawai BPA
            </p>

            <form action="#" method="POST" class="mt-10 space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">
                        Email Admin
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="admin@bpa.ac.id"
                        class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#7a2222]"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#7a2222]"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full bg-[#7a2222] hover:bg-[#631b1b] text-white py-4 rounded-2xl font-semibold shadow-lg transition duration-300"
                >
                    Masuk ke Dashboard
                </button>

            </form>

            <div class="mt-8 text-center text-sm text-gray-400">
                Role-Based Access • Audit Log • Pengelolaan Ticket
            </div>

        </div>

    </div>

</div>

</body>
</html>