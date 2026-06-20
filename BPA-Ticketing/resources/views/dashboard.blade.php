<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Ticketing - Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-white h-screen overflow-hidden">

    <div class="w-full h-screen flex">

        @include('partials.sidebar')
        {{-- Sesuaikan path di atas, jika file di folder yang sama cukup tulis: @include('sidebar') --}}

        <main class="flex-1 overflow-y-auto p-12 bg-white">

            <div class="flex justify-between items-start mb-12">
                <div>
                    <h1 class="text-3xl font-bold text-black tracking-tight">
                        Halo, Dina
                    </h1>
                    <p class="text-gray-600 mt-2 text-base">
                        Silahkan pilih kategori untuk mengirim pertanyaan ke BPA.
                    </p>
                </div>
                <button class="btn-primary shadow-sm text-sm">
                    Buat Tiket
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="dashboard-card">
                    <span class="category-badge badge-blue">
                        Data Sertifikasi Dosen
                    </span>
                    <p class="text-gray-400 text-sm mt-6">
                        Pilih kategori ini
                    </p>
                </div>

                <div class="dashboard-card">
                    <span class="category-badge badge-green">
                        Data Mahasiswa
                    </span>
                    <p class="text-gray-400 text-sm mt-6">
                        Pilih kategori ini
                    </p>
                </div>

                <div class="dashboard-card">
                    <span class="category-badge badge-yellow">
                        Program Magang Berdampak
                    </span>
                    <p class="text-gray-400 text-sm mt-6">
                        Pilih kategori ini
                    </p>
                </div>

                <div class="dashboard-card">
                    <span class="category-badge badge-purple">
                        Data Kerjasama
                    </span>
                    <p class="text-gray-400 text-sm mt-6">
                        Pilih kategori ini
                    </p>
                </div>

            </div>
            
            <div class="ticket-active-box">
                <div class="text-sm text-black">
                    Ticket aktif:#BPA-2026-014.Status:<span class="font-normal text-black">In Progresss</span>
                </div>
                <a href="#" class="text-[#7a2222] font-bold text-sm hover:underline flex items-center gap-1">
                    Lihat riwayat <span class="text-base">➔</span>
                </a>
            </div>

        </main>

    </div>

</body>

</html>