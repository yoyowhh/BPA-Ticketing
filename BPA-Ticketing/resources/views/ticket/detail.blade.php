@extends('layout.app')

@section('content')

<h1 class="text-xl font-bold mb-4">
    Ticket #{{ $ticket->nomor_ticket }}
</h1>

{{-- 🔥 PERTANYAAN USER (INI YANG KAMU LUPA) --}}
<div class="mb-6">
    <div class="bg-blue-100 p-4 rounded-lg max-w-xl">
        <p class="text-sm font-bold text-blue-700">Pertanyaan</p>
        <p class="text-gray-800 mt-1">
            {{ $ticket->deskripsi }}
        </p>
    </div>
</div>

{{-- CHAT --}}
<div class="space-y-4">

@foreach($balasan as $b)

    @if($b->admin_id)
        {{-- ADMIN --}}
        <div class="flex justify-end">
            <div class="bg-green-100 p-3 rounded-lg max-w-md">
                <p class="text-sm font-bold">Admin</p>
                <p>{{ $b->pesan }}</p>
            </div>
        </div>
    @else
        {{-- USER --}}
        <div class="flex justify-start">
            <div class="bg-gray-100 p-3 rounded-lg max-w-md">
                <p class="text-sm font-bold">You</p>
                <p>{{ $b->pesan }}</p>
            </div>
        </div>
    @endif

@endforeach

</div>

{{-- FORM --}}
<form method="POST" class="mt-6" action="/ticket/{{ $ticket->ticket_id }}/reply">
    @csrf

    <textarea name="pesan" class="w-full border p-3 rounded" placeholder="Tulis balasan..."></textarea>

    <button class="mt-3 bg-black text-white px-4 py-2 rounded">
        Kirim
    </button>
</form>

@endsection
