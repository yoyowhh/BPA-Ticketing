@extends('layout.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">Riwayat Tiket</h1>

@foreach($tickets as $t)

<div class="border p-4 rounded mb-4">

    <div class="flex justify-between">
        <div>
            <b>#{{ $t->nomor_ticket }}</b>
            <p>{{ $t->deskripsi }}</p>
        </div>

        <span class="px-3 py-1 bg-gray-200 rounded">
            {{ $t->status }}
        </span>
    </div>

    <a href="/ticket/{{ $t->ticket_id }}" class="text-blue-600 text-sm">
        Lihat detail
    </a>

</div>

@endforeach

@endsection
