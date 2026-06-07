<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Ticketing - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#1e1e1e] min-h-screen flex items-center justify-center p-4">

    <!-- Container Utama Putih -->
    <div class="bg-white w-full max-w-5xl rounded-sm shadow-2xl min-h-[600px] flex relative overflow-hidden">
        
        <!-- Label Mockup Kecil di Pojok Kiri Atas -->
        <div class="absolute top-2 left-4 text-[10px] text-gray-400 select-none z-5xl">
            Mockup 3 - Halaman setelah login
        </div>

        <!-- ================= SIDEBAR (Kiri) ================= -->
        <aside class="w-1/4 bg-[#f8fafc] border-r border-[#8b5cf6] pt-16 pb-8 px-6 flex flex-col justify-between">
            <div class="space-y-8">
                <!-- Logo / Judul App -->
                <div class="font-bold text-lg text-black px-2">
                    BPA Ticketing
                </div>
                
                <!-- Menu Navigasi -->
                <nav class="flex flex-col space-y-3">
                    <!-- Beranda (Active State) -->
                    <a href="#" class="flex items-center space-x-3 text-[#7a2222] font-semibold text-sm py-1.5 px-2 border-l-4 border-[#7a2222]">
                        <span>Beranda</span>
                    </a>
                    <!-- Menu Lainnya -->
                    <a href="#" class="flex items-center space-x-3 text-gray-600 hover:text-black font-medium text-sm py-1.5 px-2 transition">
                        <span>Buat Tiket</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-gray-600 hover:text-black font-medium text-sm py-1.5 px-2 transition">
                        <span>Riwayat Tiket</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 text-gray-600 hover:text-black font-medium text-sm py-1.5 px-2 transition">
                        <span>Profil</span>
                    </a>
                </nav>
            </div>
        </aside>

        <!-- ================= KONTEN UTAMA (Kanan) ================= -->
        <main class="w-3/4 p-12 pt-16 flex flex-col justify-between">
            
            <div>
                <!-- Header Konten -->
                <div class="flex justify-between items-start mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-black">Halo, Dina</h1>
                        <p class="text-sm text-gray-600 mt-1">Silahkan pilih kategori untuk mengirim pertanyaan ke BPA.</p>
                    </div>
                    <!-- Tombol Buat Tiket -->
                    <button class="bg-[#7a2222] hover:bg-[#631b1b] text-white font-semibold py-3 px-8 rounded-2xl shadow-md transition duration-200 text-sm">
                        Buat Tiket
                    </button>
                </div>

                <!-- Grid Kategori Berbentuk Card -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    
                    <!-- Card 1: Data Sertifikasi Dosen -->
                    <div class="border border-gray-300 rounded-[24px] p-6 shadow-sm hover:shadow-md transition flex flex-col items-start space-y-4">
                        <span class="bg-[#eef2ff] text-[#2563eb] text-xs font-semibold py-2 px-4 rounded-full border border-[#e0e7ff]">
                            Data Sertifikasi Dosen
                        </span>
                        <span class="text-gray-400 text-xs font-medium">Pilih kategori ini</span>
                    </div>

                    <!-- Card 2: Data Mahasiswa -->
                    <div class="border border-gray-300 rounded-[24px] p-6 shadow-sm hover:shadow-md transition flex flex-col items-start space-y-4">
                        <span class="bg-[#e8f5e9] text-[#2e7d32] text-xs font-semibold py-2 px-4 rounded-full border border-[#c8e6c9]">
                            Data Mahasiswa
                        </span>
                        <span class="text-gray-400 text-xs font-medium">Pilih kategori ini</span>
                    </div>

                    <!-- Card 3: Program Magang Berdampak -->
                    <div class="border border-gray-300 rounded-[24px] p-6 shadow-sm hover:shadow-md transition flex flex-col items-start space-y-4">
                        <span class="bg-[#fdf8e2] text-[#b45309] text-xs font-semibold py-2 px-4 rounded-full border border-[#fef3c7]">
                            Program Magang Berdampak
                        </span>
                        <span class="text-gray-400 text-xs font-medium">Pilih kategori ini</span>
                    </div>

                    <!-- Card 4: Data Kerjasama -->
                    <div class="border border-gray-300 rounded-[24px] p-6 shadow-sm hover:shadow-md transition flex flex-col items-start space-y-4">
                        <span class="bg-[#f3e8ff] text-[#6b21a8] text-xs font-semibold py-2 px-4 rounded-full border border-[#e9d5ff]">
                            Data Kerjasama
                        </span>
                        <span class="text-gray-400 text-xs font-medium">Pilih kategori ini</span>
                    </div>

                </div>
            </div>

            <!-- Card Banner Ticket Aktif di Bagian Bawah -->
            <div class="border border-gray-300 rounded-[20px] p-5 shadow-sm flex justify-between items-center bg-white mt-auto">
                <div class="text-sm font-medium text-gray-800">
                    Ticket aktif:<span class="font-semibold">#BPA-2026-014</span>.Status:<span class="font-semibold">In Progresss</span>
                </div>
                <a href="#" class="text-[#7a2222] font-bold text-sm flex items-center space-x-1 hover:underline">
                    <span>Lihat riwayat</span>
                    <span>&rarr;</span>
                </a>
            </div>

        </main>

    </div>

</body>
</html>