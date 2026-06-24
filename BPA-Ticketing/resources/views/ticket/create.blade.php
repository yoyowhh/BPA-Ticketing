<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Tiket - BPA Ticketing</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-gray-50 min-h-screen">

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    @include('partials.sidebar')

    {{-- CONTENT --}}
    <main class="flex-1 p-12">

        <h1 class="text-3xl font-bold mb-2">Buat Tiket</h1>
        <p class="text-gray-500 mb-8">
            Silakan isi form untuk mengajukan pertanyaan ke BPA
        </p>

        {{-- FORM --}}
        <form action="{{ route('ticket.store') }}" method="POST"
              class="bg-white p-8 rounded-2xl shadow-md max-w-2xl space-y-6">

            @csrf

            {{-- KATEGORI --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Kategori
                </label>

                <select name="kategori_id"
                        class="w-full border rounded-xl p-3 focus:ring-2 focus:ring-[#8B1E1E]">

                    <option value="">-- Pilih Kategori --</option>

                    @foreach($kategori as $k)
                        <option value="{{ $k->kategori_id }}">
                            {{ $k->nama_kategori }}
                        </option>
                    @endforeach

                </select>
            </div>

            {{-- DESKRIPSI --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Deskripsi Masalah
                </label>

                <textarea name="deskripsi" rows="6"
                          class="w-full border rounded-xl p-3 focus:ring-2 focus:ring-[#8B1E1E]"
                          placeholder="Jelaskan masalah kamu..."></textarea>
            </div>

            {{-- BUTTON --}}
            <button type="submit"
                    class="w-full bg-[#8B1E1E] hover:bg-[#741818] text-white py-3 rounded-xl font-semibold">
                Kirim Tiket
            </button>

        </form>

    </main>

</div>

</body>
</html>
