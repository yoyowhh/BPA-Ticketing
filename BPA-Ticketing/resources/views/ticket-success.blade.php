<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Ticketing - Ticket Berhasil Dibuat</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white h-screen overflow-hidden">

    <div class="w-full h-screen flex">

        @include('partials.sidebar')

        <main class="flex-1 overflow-y-auto p-12 bg-white flex flex-col justify-between">

            <div class="space-y-8 w-full max-w-6xl">

                <div
                    class="success-alert-box flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-black tracking-tight mb-2">
                            Ticket Berhasil dibuat
                        </h2>
                        <p class="text-gray-700 text-sm font-medium">
                            Nomor ticket: BPA-2026-021
                        </p>
                    </div>

                    <div class="flex items-center gap-6">
                        <span class="badge-open">
                            Open
                        </span>
                        <p class="text-gray-700 text-sm max-w-xs leading-relaxed">
                            Admin BPA akan meminjau pertanyaan Anda.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <div class="border-card lg:col-span-2 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-black mb-6">
                                Detail pertanyaan
                            </h3>

                            <div class="space-y-2 text-sm text-black">
                                <p><span class="font-normal text-gray-800">Kategori:</span> Data Mahasiswa</p>
                                <p><span class="font-normal text-gray-800">Pengirim:</span> Dina Nur Aulia</p>
                                <p><span class="font-normal text-gray-800">Dibuat:</span> 26 Mar 2026 - 10:42</p>
                                <p class="pt-2 leading-relaxed">
                                    <span class="font-normal text-gray-800 block mb-1">Isi:</span>
                                    Pertanyaan terkait pembaruan data mahasiswa untuk kebutuhan laporan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="border-card flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-black mb-6">
                                Riwayat status
                            </h3>

                            <div class="space-y-3 text-sm text-black">
                                <p class="flex justify-between">
                                    <span class="text-gray-500">10:42</span>
                                    <span class="font-medium text-right flex-1 pl-4">Ticket dibuat</span>
                                </p>
                                <p class="flex justify-between">
                                    <span class="text-gray-500">10:43</span>
                                    <span class="font-medium text-right flex-1 pl-4">Menunggu admin</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="w-full max-w-6xl flex justify-center items-center gap-4 pt-8 mb-4">
                <a href="/ticket" class="btn-dark-custom text-sm text-center no-underline">
                    Buat Tiket Baru
                </a>
                <a href="#" class="btn-outline-maroon text-sm text-center no-underline">
                    Lihat Riwayat
                </a>
            </div>

        </main>

    </div>

</body>

</html>