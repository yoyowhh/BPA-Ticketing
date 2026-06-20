<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Ticketing - Lengkapi Data Diri</title>

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

        <main class="flex-1 overflow-y-auto p-12 bg-white flex flex-col justify-start items-start">

            <div class="w-full max-w-5xl">
                <div class="flex justify-between items-center mb-3">
                    <h1 class="text-3xl font-bold text-black tracking-tight">
                        Lengkapi Data Diri
                    </h1>
                    <span class="text-sm text-gray-400 font-medium">
                        1 dari 1 langkah
                    </span>
                </div>

                <div class="border-b border-dashed border-gray-300 mb-8"></div>

                <div class="card-container shadow-sm">

                    <form action="#" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="form-label">
                                    Nama Lengkap
                                </label>
                                <input type="text" name="nama_lengkap" value="Alex Ferguson" class="form-input">
                            </div>

                            <div>
                                <label class="form-label">
                                    Email
                                </label>
                                <input type="email" name="email" value="alex_2205@gmail.com" class="form-input">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                            <div>
                                <label class="form-label">
                                    NIM/NIP
                                </label>
                                <input type="text" name="nim_nip" value="2205062006" class="form-input">
                            </div>

                            <div>
                                <label class="form-label">
                                    Status
                                </label>
                                <input type="text" name="status" value="Mahasiswa" class="form-input">
                            </div>
                        </div>

                        <div class="mt-6">
                            <label class="form-label">
                                Prodi / Unit
                            </label>
                            <input type="text" name="prodi_unit" value="Rekayasa Perangkat Lunak Aplikasi"
                                class="form-input">
                        </div>

                        <div class="flex justify-end mt-10">
                            <button type="submit" class="btn-primary text-sm shadow-sm">
                                Simpan & Lanjut
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </main>

    </div>

</body>

</html>