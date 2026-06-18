<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Ticketing - Buat Ticket Baru</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        maroon: {
                            DEFAULT: '#8A1C22',
                            hover: '#6E1419'
                        },
                        bgSidebar: '#F8FAFC',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 font-sans min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-bgSidebar border-r border-gray-100 flex flex-col pt-12 pl-10 pr-4 shrink-0">

        <h1 class="text-xl font-bold text-gray-900 mb-14 tracking-wide">
            BPA Ticketing
        </h1>

        <nav class="space-y-6">

            <a href="{{ url('/') }}"
               class="block text-gray-700 hover:text-gray-900 font-medium transition-colors">
                Beranda
            </a>

            <div class="relative -left-10 pl-10 flex items-center">
                <div class="w-1 h-7 bg-maroon rounded-r-md absolute left-0"></div>

                <a href="{{ url('/ticket') }}"
                   class="text-maroon font-semibold tracking-wide">
                    Buat Tiket
                </a>
            </div>

            <a href="#"
               class="block text-gray-700 hover:text-gray-900 font-medium transition-colors">
                Riwayat Tiket
            </a>

            <a href="#"
               class="block text-gray-700 hover:text-gray-900 font-medium transition-colors">
                Profil
            </a>

        </nav>

    </aside>

    <!-- KONTEN UTAMA -->
    <main class="flex-1 p-12 bg-white flex justify-start items-start overflow-y-auto">

        <div class="w-full max-w-4xl border border-gray-400 rounded-3xl p-10 bg-white">

            <h2 class="text-2xl font-bold text-gray-900 mb-2 tracking-wide">
                Buat Ticket Baru
            </h2>

            <p class="text-sm font-bold text-gray-900 mb-6">
                Data Penanya
            </p>

            <form action="#" method="POST" class="space-y-6">
                @csrf

                <!-- Nama & NIM/NIP -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div>
                        <label class="block text-sm font-medium text-gray-800 mb-2">
                            Nama
                        </label>

                        <input
                            type="text"
                            name="nama"
                            placeholder="Alex Ferguson"
                            class="w-full border border-gray-400 rounded-2xl px-4 py-3.5 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-maroon transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-800 mb-2">
                            NIM/NIP
                        </label>

                        <input
                            type="text"
                            name="nim_nip"
                            placeholder="213424134"
                            class="w-full border border-gray-400 rounded-2xl px-4 py-3.5 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-maroon transition-colors">
                    </div>

                </div>

                <!-- Status & Prodi -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div>
                        <label class="block text-sm font-medium text-gray-800 mb-2">
                            Status
                        </label>

                        <input
                            type="text"
                            name="status"
                            placeholder="Mahasiswa"
                            class="w-full border border-gray-400 rounded-2xl px-4 py-3.5 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-maroon transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-800 mb-2">
                            Prodi / Unit
                        </label>

                        <input
                            type="text"
                            name="prodi_unit"
                            placeholder="Teknik Informatika"
                            class="w-full border border-gray-400 rounded-2xl px-4 py-3.5 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-maroon transition-colors">
                    </div>

                </div>

                <!-- Kategori BPA -->
                <div>

                    <label class="block text-sm font-medium text-gray-800 mb-2">
                        Kategori BPA
                    </label>

                    <select
                        name="kategori_bpa"
                        class="w-full border border-gray-400 rounded-2xl px-4 py-3.5 text-gray-700 focus:outline-none focus:border-maroon transition-colors">

                        <option value="">Pilih kategori</option>
                        <option value="sertifikasi_dosen">Data Sertifikasi Dosen</option>
                        <option value="data_mahasiswa">Data Mahasiswa</option>
                        <option value="magang_berdampak">Program Magang Berdampak</option>
                        <option value="kerjasama">Data Kerjasama</option>

                    </select>

                </div>

                <!-- Pertanyaan -->
                <div>

                    <label class="block text-sm font-medium text-gray-800 mb-2">
                        Pertanyaan
                    </label>

                    <textarea
                        name="pertanyaan"
                        rows="5"
                        placeholder="Tuliskan pertanyaan Anda di sini..."
                        class="w-full border border-gray-400 rounded-2xl px-4 py-3.5 text-gray-700 focus:outline-none focus:border-maroon transition-colors resize-none"></textarea>

                </div>

                <!-- Tombol -->
                <div class="flex justify-end pt-2">

                    <button
                        type="submit"
                        class="bg-maroon hover:bg-maroon-hover text-white font-semibold px-12 py-3.5 rounded-2xl shadow-md transition-all duration-200 tracking-wide">

                        Kirim Ticket

                    </button>

                </div>

            </form>

        </div>

    </main>

</body>
</html>
```
