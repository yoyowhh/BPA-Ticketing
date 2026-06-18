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

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-white h-screen overflow-hidden">

<div class="w-full h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-72 bg-slate-50 border-r border-gray-200 flex flex-col">

        <div class="p-8 border-b border-gray-200">
            <h1 class="text-2xl font-bold">
                BPA Ticketing
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Sistem Layanan Ticketing
            </p>
        </div>

        <nav class="flex-1 p-6">

            <ul class="space-y-2">

                <li>
                    <a href="/dashboard"
                       class="sidebar-active">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="/ticket"
                       class="sidebar-link">
                        Buat Tiket
                    </a>
                </li>

                <li>
                    <a href="#"
                       class="sidebar-link">
                        Riwayat Tiket
                    </a>
                </li>

                <li>
                    <a href="/lengkapi-identitas"
                       class="sidebar-link">
                        Profil
                    </a>
                </li>

            </ul>

        </nav>

        <div class="p-6 border-t border-gray-200">
            <p class="text-sm text-gray-500">
                Login sebagai
            </p>

            <p class="font-semibold">
                Dina
            </p>
        </div>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 overflow-y-auto p-10 bg-white">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-10">

            <div>

                <h1 class="text-4xl font-bold text-black">
                    Halo, Dina 👋
                </h1>

                <p class="text-gray-500 mt-2">
                    Silakan pilih kategori untuk mengirim pertanyaan ke BPA.
                </p>

            </div>

            <button class="btn-primary">
                + Buat Tiket
            </button>

        </div>

        <!-- KATEGORI -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="dashboard-card">
                <span class="category-badge badge-blue">
                    Data Sertifikasi Dosen
                </span>

                <p class="text-gray-500 mt-6">
                    Ajukan pertanyaan terkait data sertifikasi dosen.
                </p>
            </div>

            <div class="dashboard-card">
                <span class="category-badge badge-green">
                    Data Mahasiswa
                </span>

                <p class="text-gray-500 mt-6">
                    Ajukan pertanyaan terkait data mahasiswa.
                </p>
            </div>

            <div class="dashboard-card">
                <span class="category-badge badge-yellow">
                    Program Magang Berdampak
                </span>

                <p class="text-gray-500 mt-6">
                    Ajukan pertanyaan terkait program magang berdampak.
                </p>
            </div>

            <div class="dashboard-card">
                <span class="category-badge badge-purple">
                    Data Kerjasama
                </span>

                <p class="text-gray-500 mt-6">
                    Ajukan pertanyaan terkait data kerjasama.
                </p>
            </div>

        </div>

        <!-- TIKET AKTIF -->
        <div class="ticket-active-box">

            <div>

                <h3 class="font-semibold text-lg">
                    Ticket Aktif
                </h3>

                <p class="text-gray-600 mt-1">
                    #BPA-2026-014 •

                    <span class="text-orange-500 font-semibold">
                        In Progress
                    </span>
                </p>

            </div>

            <a href="#"
               class="text-[#7a2222] font-bold hover:underline">

                Lihat Riwayat →

            </a>

        </div>

    </main>

</div>

</body>
</html>