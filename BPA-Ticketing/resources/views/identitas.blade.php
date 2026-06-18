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

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-white min-h-screen">

    <div class="max-w-7xl mx-auto px-5 py-6">

        <!-- Header -->
        <div class="flex justify-between items-center mb-3">
            <h1 class="text-3xl font-bold text-black">
                Lengkapi Data Diri
            </h1>

            <span class="text-sm text-gray-500 font-medium">
                1 dari 1 langkah
            </span>
        </div>

        <!-- Garis -->
        <div class="border-b border-dashed border-blue-400 mb-8"></div>

        <!-- Container -->
        <div class="card-container">

            <form action="#" method="POST">

                @csrf

                <!-- Baris 1 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label class="form-label">
                            Nama Lengkap
                        </label>

                        <input type="text"
                               name="nama_lengkap"
                               value="Alex Ferguson"
                               class="form-input">
                    </div>

                    <div>
                        <label class="form-label">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               value="alex_2205@gmail.com"
                               class="form-input">
                    </div>

                </div>

                <!-- Baris 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

                    <div>
                        <label class="form-label">
                            NIM/NIP
                        </label>

                        <input type="text"
                               name="nim_nip"
                               value="2205062006"
                               class="form-input">
                    </div>

                    <div>
                        <label class="form-label">
                            Status
                        </label>

                        <input type="text"
                               name="status"
                               value="single"
                               class="form-input">
                    </div>

                </div>

                <!-- Prodi -->
                <div class="mt-6">

                    <label class="form-label">
                        Prodi / Unit
                    </label>

                    <input type="text"
                           name="prodi_unit"
                           value="S5 Roam"
                           class="form-input">

                </div>

                <!-- Tombol -->
                <div class="flex justify-end mt-10">

                    <button type="submit" class="btn-primary">
                        Simpan & Lanjut
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>
</html>
```
