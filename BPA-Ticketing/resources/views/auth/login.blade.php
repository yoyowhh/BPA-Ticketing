<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Ticketing BPA - Masuk</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-white min-h-screen">

<div class="w-full min-h-screen grid grid-cols-1 lg:grid-cols-2 px-8 lg:px-24 py-12 gap-16 items-center">

    <!-- LEFT -->
    <div class="flex flex-col justify-center max-w-xl">

        <h1 class="text-5xl lg:text-6xl font-extrabold text-black leading-tight">
            Layanan <br>
            Ticketing BPA
        </h1>

        <p class="text-gray-600 text-lg mt-6 leading-relaxed max-w-md">
            Ajukan pertanyaan terkait data sertifikasi dosen,
            data mahasiswa, program magang, dan data kerjasama.
        </p>

        <!-- ADMIN LOGIN BUTTON -->
        <div class="mt-8">
            <a href="/admin/login"
               class="inline-block bg-gray-900 hover:bg-black text-white px-6 py-3 rounded-xl font-semibold shadow-md transition">
                Login sebagai Admin
            </a>
        </div>

    </div>

    <!-- RIGHT -->
    <div class="flex justify-center">

        <div class="w-full max-w-md border border-gray-300 rounded-[32px] p-10 bg-white shadow-lg">

            <h2 class="text-4xl font-bold text-center">
                Masuk
            </h2>

            <p class="text-gray-500 text-center mt-2">
                Gunakan akun email yang aktif
            </p>

            <form action="/login" method="POST" class="mt-8 space-y-5">
                @csrf

                <!-- GOOGLE -->
                <button type="button"
                    class="w-full bg-[#8B1E1E] hover:bg-[#741818] text-white py-3.5 rounded-xl font-semibold shadow-md transition">
                    Langsung dengan Google
                </button>

                <div class="text-center text-gray-400 text-sm">
                    atau masuk dengan email
                </div>

                <!-- EMAIL -->
                <input type="email" name="email"
                    placeholder="contoh@domain.com"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#8B1E1E]">

                <!-- PASSWORD -->
                <input type="password" name="password"
                    placeholder="********"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#8B1E1E]">

                <!-- LOGIN -->
                <button type="submit"
                    class="w-full bg-[#8B1E1E] hover:bg-[#741818] text-white py-3.5 rounded-xl font-semibold shadow-lg transition">
                    Masuk
                </button>

                @if(session('error'))
                    <div class="text-red-500 text-sm text-center">
                        {{ session('error') }}
                    </div>
                @endif

            </form>

            <div class="text-center mt-6 text-gray-500 text-sm">
                Belum punya akun?
                <a href="/register" class="text-[#8B1E1E] font-medium hover:underline">
                    Register
                </a>
            </div>

        </div>

    </div>

</div>

</body>
</html>
