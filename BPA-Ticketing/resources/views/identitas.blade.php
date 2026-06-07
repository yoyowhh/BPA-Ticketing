<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Data Diri</title>
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
    <div class="bg-white w-full max-w-5xl rounded-sm shadow-2xl min-h-[600px] p-8 md:p-12 relative flex flex-col justify-between">
        
        <!-- Label Mockup Kecil di Pojok Kiri Atas -->
        <div class="absolute top-2 left-4 text-[10px] text-gray-400 select-none">
            Mockup 2 - Halaman lengkapi identitas
        </div>

        <!-- Bagian Atas: Header & Progress Step -->
        <div class="w-full">
            <div class="flex justify-between items-center border-b border-dashed border-blue-400 pb-4 mb-8">
                <h1 class="text-2xl md:text-3xl font-bold text-black">Lengkapi Data Diri</h1>
                <span class="text-sm text-gray-500 font-medium">1 dari 1 langkah</span>
            </div>

            <!-- Form Input (Di dalam card ber-border tipis abu-abu) -->
            <form action="#" method="POST" class="border border-gray-300 rounded-[24px] p-8 md:p-10 space-y-6 bg-white shadow-sm">
                @csrf

                <!-- Baris 1: Nama Lengkap & Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1.5">
                        <label class="text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="Alex Ferguson" 
                            class="w-full px-4 py-3.5 border border-gray-400 rounded-2xl text-gray-800 text-sm focus:outline-none focus:ring-1 focus:ring-gray-500">
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" value="alex_2205@gmail.com" 
                            class="w-full px-4 py-3.5 border border-gray-400 rounded-2xl text-gray-800 text-sm focus:outline-none focus:ring-1 focus:ring-gray-500">
                    </div>
                </div>

                <!-- Baris 2: NIM/NIP & Status -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1.5">
                        <label class="text-sm font-medium text-gray-700">NIM/NIP</label>
                        <input type="text" name="nim_nip" value="2205062006" 
                            class="w-full px-4 py-3.5 border border-gray-400 rounded-2xl text-gray-800 text-sm focus:outline-none focus:ring-1 focus:ring-gray-500">
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-sm font-medium text-gray-700">Status</label>
                        <input type="text" name="status" value="single" 
                            class="w-full px-4 py-3.5 border border-gray-400 rounded-2xl text-gray-800 text-sm focus:outline-none focus:ring-1 focus:ring-gray-500">
                    </div>
                </div>

                <!-- Baris 3: Prodi / Unit (Full Width) -->
                <div class="space-y-1.5">
                    <label class="text-sm font-medium text-gray-700">Prodi / Unit</label>
                    <input type="text" name="prodi_unit" value="S5 Raam" 
                        class="w-full px-4 py-3.5 border border-gray-400 rounded-2xl text-gray-800 text-sm focus:outline-none focus:ring-1 focus:ring-gray-500">
                </div>

                <!-- Bagian Tombol (Rata Kanan) -->
                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-[#7a2222] hover:bg-[#631b1b] text-white font-semibold py-3.5 px-10 rounded-2xl shadow-md transition duration-200 text-sm">
                        Simpan & Lanjut
                    </button>
                </div>
            </form>
        </div>

    </div>

</body>
</html> 