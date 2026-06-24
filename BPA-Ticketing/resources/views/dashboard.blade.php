<!DOCTYPE html>
<html>
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

    <main class="flex-1 overflow-y-auto p-12 bg-white">

        {{-- HEADER --}}
        <div class="flex justify-between items-start mb-12">

            <div>
                <h1 class="text-3xl font-bold text-black tracking-tight">
                    Halo, {{ $user->nama_lengkap ?? 'User' }}
                </h1>

                <p class="text-gray-600 mt-2 text-base">
                    Silahkan pilih kategori untuk mengirim pertanyaan ke BPA.
                </p>
            </div>

            <a href="/ticket/create" class="btn-primary shadow-sm text-sm">
                Buat Tiket
            </a>

        </div>

        {{-- KATEGORI --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            @foreach($kategori as $k)
                <div class="dashboard-card cursor-pointer hover:shadow-lg transition">
                    <span class="category-badge badge-blue">
                        {{ $k->nama_kategori }}
                    </span>

                    <p class="text-gray-400 text-sm mt-6">
                        Klik untuk membuat tiket
                    </p>
                </div>
            @endforeach

        </div>

        {{-- TICKET AKTIF --}}
        @if($ticketAktif)
        <div class="ticket-active-box mt-10 flex justify-between items-center">

            <div class="text-sm text-black">
                Ticket aktif: <b>#{{ $ticketAktif->nomor_ticket }}</b>
                Status:
                <span class="font-normal text-black">
                    {{ $ticketAktif->status }}
                </span>
            </div>

            <a href="/ticket/{{ $ticketAktif->ticket_id }}"
               class="text-[#7a2222] font-bold text-sm hover:underline flex items-center gap-1">
                Lihat riwayat <span class="text-base">➔</span>
            </a>

        </div>
        @endif

    </main>

</div>

</body>
</html>
