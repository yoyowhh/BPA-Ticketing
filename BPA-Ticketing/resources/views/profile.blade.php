@extends('layout.app')

@section('content')

@php
    $user = DB::table('user')
        ->where('user_id', session('user_id'))
        ->first();
@endphp

<div class="max-w-3xl">

    <h1 class="text-3xl font-bold mb-2">Profil Saya</h1>
    <p class="text-gray-500 mb-8">Kelola data akun kamu</p>

    <div class="bg-white border rounded-2xl p-8 shadow-sm">

        <div class="flex items-center gap-6">

            <div class="w-20 h-20 rounded-full bg-[#8B1E1E] flex items-center justify-center text-white text-2xl font-bold">
                {{ strtoupper(substr($user->nama_lengkap ?? 'U', 0, 1)) }}
            </div>

            <div>
                <h2 class="text-xl font-bold">
                    {{ $user->nama_lengkap ?? '-' }}
                </h2>

                <p class="text-gray-500">
                    {{ $user->email ?? '-' }}
                </p>
            </div>

        </div>

        <hr class="my-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">

            <div>
                <p class="text-gray-500">Nama Lengkap</p>
                <p class="font-semibold">{{ $user->nama_lengkap ?? '-' }}</p>
            </div>

            <div>
                <p class="text-gray-500">NIM / NIP</p>
                <p class="font-semibold">{{ $user->nim_nip ?? '-' }}</p>
            </div>

            <div>
                <p class="text-gray-500">Status</p>
                <p class="font-semibold">{{ $user->status ?? '-' }}</p>
            </div>

            <div>
                <p class="text-gray-500">Prodi / Unit</p>
                <p class="font-semibold">{{ $user->prodi_unit ?? '-' }}</p>
            </div>

            <div>
                <p class="text-gray-500">Email</p>
                <p class="font-semibold">{{ $user->email ?? '-' }}</p>
            </div>

        </div>

        <hr class="my-6">

        <div class="flex gap-3">
            <a href="/logout"
               class="bg-gray-100 hover:bg-gray-200 px-5 py-2 rounded-lg font-semibold">
                Logout
            </a>
        </div>

    </div>

</div>

@endsection
