<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Admin Center - Super Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#1e1e1e] min-h-screen flex items-center justify-center p-4">

    <!-- Container Utama Merah Marun Gelap -->
    <div class="bg-[#5c1d1d] w-full max-w-5xl rounded-sm shadow-2xl min-h-[600px] grid grid-cols-1 md:grid-cols-12 p-8 md:p-16 gap-8 items-center relative overflow-hidden">
        
        <!-- Label Mockup Kecil di Pojok Kiri Atas -->
        <div class="absolute top-2 left-4 text-[10px] text-gray-400 select-none">
            Mockup 7 - Halaman login super admin
        </div>

        <!-- Bagian Kiri: Informasi Admin Center (Mengambil 5 dari 12 Kolom) -->
        <div class="md:col-span-5 flex flex-col space-y-4 text-white pr-4">
            <h1 class="text-3xl font-bold leading-tight">
                BPA Admin<br>Center
            </h1>
            <p class="text-gray-200 text-sm leading-relaxed max-w-xs font-light">
                Akses terpusat untuk memantau ticket, menjawab pertanyaan, dan melihat rekap layanan.
            </p>
        </div>

        <!-- Bagian Kanan: Card Login Putih (Mengambil 7 dari 12 Kolom) -->
        <div class="md:col-span-7 bg-white rounded-[40px] p-10 md:p-12 flex flex-col items-center shadow-xl max-w-md mx-auto w-full">
            
            <h2 class="text-2xl font-bold text-black text-center">Super Admin Login</h2>
            <p class="text-gray-400 text-xs text-center mt-1 font-medium">
                Portal Khusus pegawai BPA
            </p>

            <!-- Form Konten -->
            <form action="#" method="POST" class="w-full mt-8 space-y-5">
                @csrf

                <!-- Input Email Admin -->
                <div class="space-y-1.5">
                    <label for="email" class="text-xs font-medium text-gray-400">Email admin</label>
                    <input type="email" id="email" name="email" 
                        class="w-full px-4 py-3.5 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-gray-500 text-gray-700 shadow-sm text-sm" required>
                </div>

                <!-- Input Password -->
                <div class="space-y-1.5">
                    <label for="password" class="text-xs font-medium text-gray-400">Password</label>
                    <input type="password" id="password" name="password" 
                        class="w-full px-4 py-3.5 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-gray-500 text-gray-700 shadow-sm text-sm" required>
                </div>

                <!-- Tombol Masuk ke Dashboard -->
                <div class="pt-4">
                    <button type="submit" class="w-full bg-[#7a2222] hover:bg-[#631b1b] text-white font-semibold py-3.5 px-4 rounded-xl shadow-md transition duration-200 text-sm tracking-wide">
                        Masuk ke dashboard
                    </button>
                </div>
            </form>

            <!-- Footer Fitur di Bawah Card -->
            <div class="text-center text-[11px] text-gray-400 font-medium mt-8 tracking-wide">
                Role-based access &middot; audit log &middot; pengelolaan ticket
            </div>
        </div>

    </div>

</body>
</html>