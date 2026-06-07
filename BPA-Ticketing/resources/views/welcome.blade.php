<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Ticketing BPA - Masuk</title>
    <!-- Menggunakan Tailwind CSS via CDN untuk kemudahan styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-[#1e1e1e] min-h-screen flex items-center justify-center p-4">

    <!-- Container Utama Putih -->
    <div class="bg-white w-full max-w-5xl rounded-sm shadow-2xl min-h-[600px] grid grid-cols-1 md:grid-cols-2 p-8 md:p-16 gap-8 items-center relative">
        
        <!-- Label Mockup Kecil di Pojok Kiri Atas sesuai gambar -->
        <div class="absolute top-2 left-4 text-[10px] text-gray-400 select-none">
            Mockup 1 - Halaman Login Pengguna
        </div>

        <!-- Bagian Kiri: Informasi Layanan -->
        <div class="flex flex-col space-y-6">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                    Layanan<br>Ticketing BPA
                </h1>
                <p class="text-gray-700 mt-4 text-base font-medium leading-relaxed max-w-sm">
                    Ajukan pertanyaan terkait data sertifikasi dosen, data mahasiswa, program magang berdampak, dan data kerjasama.
                </p>
            </div>

            <!-- List Tombol Informasi/Kategori -->
            <div class="flex flex-col space-y-3 max-w-xs">
                <div class="bg-[#eef2ff] text-[#2563eb] text-center py-2.5 px-4 rounded-full text-sm font-semibold border border-[#e0e7ff]">
                    Data Sertifikasi Dosen
                </div>
                <div class="bg-[#e8f5e9] text-[#2e7d32] text-center py-2.5 px-4 rounded-full text-sm font-semibold border border-[#c8e6c9]">
                    Data Mahasiswa
                </div>
                <div class="bg-[#eef2ff] text-[#2563eb] text-center py-2.5 px-4 rounded-full text-sm font-semibold border border-[#e0e7ff]">
                    Program Magang Berdampak
                </div>
                <div class="bg-[#e8f5e9] text-[#2e7d32] text-center py-2.5 px-4 rounded-full text-sm font-semibold border border-[#c8e6c9]">
                    Data Kerjasama
                </div>
            </div>
        </div>

        <!-- Bagian Kanan: Form Login (Card dengan Border Lengkung) -->
        <div class="border border-black rounded-[32px] p-8 md:p-10 flex flex-col items-center bg-white shadow-sm">
            <h2 class="text-2xl font-bold text-black text-center">Masuk</h2>
            <p class="text-gray-500 text-xs md:text-sm text-center mt-1 max-w-[250px]">
                Gunakan akun Google atau email yang aktif
            </p>

            <!-- Form Handling -->
            <form action="#" method="POST" class="w-full mt-6 space-y-4">
                @csrf <!-- Proteksi token CSRF bawaan Laravel -->

                <!-- Tombol Login Google -->
                <button type="button" class="w-full bg-[#7a2222] hover:bg-[#631b1b] text-white font-semibold py-3 px-4 rounded-xl shadow-md transition duration-200 text-sm">
                    Langsung dengan Google
                </button>

                <!-- Pembatas / Divider -->
                <div class="text-center text-gray-400 text-xs py-1">
                    atau masuk dengan email
                </div>

                <!-- Input Email -->
                <div class="space-y-1">
                    <label for="email" class="text-xs md:text-sm font-medium text-gray-500">Email</label>
                    <input type="email" id="email" name="email" placeholder="contoh@domain.com" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-gray-400 placeholder-gray-400 text-gray-700 shadow-sm text-sm" required>
                </div>

                <!-- Input Password -->
                <div class="space-y-1">
                    <label for="password" class="text-xs md:text-sm font-medium text-gray-500">Password</label>
                    <input type="password" id="password" name="password" placeholder="*********" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-gray-400 placeholder-gray-400 text-gray-700 shadow-sm text-sm" required>
                </div>

                <!-- Tombol Submit Masuk -->
                <div class="pt-2">
                    <button type="submit" class="w-full bg-[#111827] hover:bg-[#1f2937] text-white font-semibold py-3.5 px-4 rounded-xl shadow-lg transition duration-200 text-sm">
                        Masuk
                    </button>
                </div>
            </form>

            <!-- Footer Card -->
            <div class="text-center text-xs md:text-sm text-gray-500 mt-4">
                Butuh bantuan? <a href="#" class="hover:underline">Hubungi admin BPA</a>
            </div>
        </div>

    </div>

</body>
</html>