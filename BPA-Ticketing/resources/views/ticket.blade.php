<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Ticketing - Buat Ticket Baru</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        maroon: {
                            DEFAULT: '#8A1C22',
                            hover: '#6E1419'
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 h-screen overflow-hidden">

    <div class="w-full h-screen flex">

        @include('partials.sidebar')

        <main class="flex-1 overflow-y-auto p-12 bg-white flex justify-start items-start">

            <div class="w-full max-w-4xl border border-gray-200 rounded-3xl p-10 bg-white shadow-sm">

                <h2 class="text-2xl font-bold text-black mb-2 tracking-wide">
                    Buat Ticket Baru
                </h2>

                <p class="text-sm font-bold text-gray-900 mb-6">
                    Data Penanya
                </p>

                <form action="{{ route('ticket.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                        <div>
                            <label class="block text-sm font-medium text-gray-800 mb-2">
                                Nama
                            </label>
                            <input type="text" name="nama" placeholder="Alex Ferguson"
                                class="w-full border border-gray-300 rounded-2xl px-4 py-3.5 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-maroon transition-colors">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-800 mb-2">
                                NIM/NIP
                            </label>
                            <input type="text" name="nim_nip" placeholder="213424134"
                                class="w-full border border-gray-300 rounded-2xl px-4 py-3.5 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-maroon transition-colors">
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                        <div>
                            <label class="block text-sm font-medium text-gray-800 mb-2">
                                Status
                            </label>
                            <input type="text" name="status" placeholder="Mahasiswa"
                                class="w-full border border-gray-300 rounded-2xl px-4 py-3.5 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-maroon transition-colors">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-800 mb-2">
                                Prodi / Unit
                            </label>
                            <input type="text" name="prodi_unit" placeholder="Teknik Informatika"
                                class="w-full border border-gray-300 rounded-2xl px-4 py-3.5 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-maroon transition-colors">
                        </div>

                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-800 mb-2">
                            Kategori BPA
                        </label>
                        <select name="kategori_bpa"
                            class="w-full border border-gray-300 rounded-2xl px-4 py-3.5 text-gray-700 focus:outline-none focus:border-maroon transition-colors bg-white">
                            <option value="">Pilih kategori</option>
                            <option value="sertifikasi_dosen">Data Sertifikasi Dosen</option>
                            <option value="data_mahasiswa">Data Mahasiswa</option>
                            <option value="magang_berdampak">Program Magang Berdampak</option>
                            <option value="kerjasama">Data Kerjasama</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-800 mb-2">
                            Pertanyaan
                        </label>
                        <textarea name="pertanyaan" rows="5" placeholder="Tuliskan pertanyaan Anda di sini..."
                            class="w-full border border-gray-300 rounded-2xl px-4 py-3.5 text-gray-700 focus:outline-none focus:border-maroon transition-colors resize-none"></textarea>
                    </div>

                    <div class="flex justify-end pt-2">
                        <button type="submit" class="btn-primary shadow-sm text-sm">
                            Kirim Ticket
                        </button>
                    </div>

                </form>

            </div>

        </main>

    </div>

</body>

</html>