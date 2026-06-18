<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Ticketing BPA - Masuk</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-white min-h-screen">

    <div class="w-full min-h-screen grid grid-cols-1 lg:grid-cols-2 px-8 lg:px-24 py-12 gap-16 items-center relative">

        <!-- BAGIAN KIRI -->
        <div class="flex flex-col justify-center max-w-xl">

            <h1 class="text-5xl lg:text-6xl font-extrabold text-black leading-tight">
                Layanan <br>
                Ticketing BPA
            </h1>

            <p class="text-gray-600 text-lg mt-6 leading-relaxed max-w-md">
                Ajukan pertanyaan terkait data sertifikasi dosen,
                data mahasiswa, program magang berdampak,
                dan data kerjasama.
            </p>

            <div class="mt-10 flex flex-col gap-4 max-w-md">

                <button class="category-button bg-indigo-50 text-blue-600 border border-indigo-100 py-3 rounded-full font-semibold hover:shadow-md">
                    Data Sertifikasi Dosen
                </button>

                <button class="category-button bg-green-50 text-green-700 border border-green-100 py-3 rounded-full font-semibold hover:shadow-md">
                    Data Mahasiswa
                </button>

                <button class="category-button bg-indigo-50 text-blue-600 border border-indigo-100 py-3 rounded-full font-semibold hover:shadow-md">
                    Program Magang Berdampak
                </button>

                <button class="category-button bg-green-50 text-green-700 border border-green-100 py-3 rounded-full font-semibold hover:shadow-md">
                    Data Kerjasama
                </button>

            </div>

        </div>

        <!-- BAGIAN KANAN -->
        <div class="flex justify-center">

            <div class="w-full max-w-md border border-gray-300 rounded-[32px] p-10 bg-white shadow-lg">

                <h2 class="text-4xl font-bold text-center">
                    Masuk
                </h2>

                <p class="text-gray-500 text-center mt-2">
                    Gunakan akun Google atau email yang aktif
                </p>

                <form action="#" method="POST" class="mt-8 space-y-5">
                    @csrf

                    <!-- Tombol Google -->
                    <button
                        type="button"
                        class="google-button w-full bg-[#8B1E1E] hover:bg-[#741818] text-white py-3.5 rounded-xl font-semibold shadow-md">
                        Langsung dengan Google
                    </button>

                    <div class="text-center text-gray-400 text-sm">
                        atau masuk dengan email
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block mb-2 text-gray-600 font-medium">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            placeholder="contoh@domain.com"
                            class="form-input w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none">
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block mb-2 text-gray-600 font-medium">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="********"
                            class="form-input w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none">
                    </div>

                    <!-- Tombol Login -->
                    <button
                        type="submit"
                        class="login-button w-full bg-[#0F172A] hover:bg-[#1E293B] text-white py-3.5 rounded-xl font-semibold shadow-lg">
                        Masuk
                    </button>

                </form>

                <div class="text-center mt-6 text-gray-500 text-sm">
                    Butuh bantuan?
                    <a href="#" class="font-medium hover:underline">
                        Hubungi admin BPA
                    </a>
                </div>

            </div>

        </div>

    </div>

</body>
</html>
```
