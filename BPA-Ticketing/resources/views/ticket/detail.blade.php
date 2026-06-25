@extends('layout.app')

@section('content')

<style>
    /* CHAT UI */
    .chat-box {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-top: 20px;
        padding: 20px;
        background: #f9fafb;
        border-radius: 12px;
        max-height: 60vh;
        overflow-y: auto;
        border: 1px solid #e5e7eb;
    }

    /* USER (KANAN) - PENGIRIM */
    .chat-user {
        align-self: flex-end;
        background: #dbeafe; /* Biru muda */
        color: #1e3a8a;
        padding: 10px 16px;
        border-radius: 15px 15px 0 15px;
        max-width: 70%;
    }

    /* ADMIN (KIRI) - PENERIMA */
    .chat-admin {
        align-self: flex-start;
        background: #f3f4f6; /* Abu-abu terang */
        color: #374151;
        padding: 10px 16px;
        border-radius: 15px 15px 15px 0;
        max-width: 70%;
    }

    .chat-name {
        font-size: 10px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 4px;
        opacity: 0.6;
    }

    .chat-form textarea {
        width: 100%;
        border: 1px solid #d1d5db;
        padding: 12px;
        border-radius: 8px;
        margin-top: 20px;
    }

    .chat-form button {
        margin-top: 10px;
        background: #111827;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
    }

    .status-closed {
        margin-top: 20px;
        padding: 15px;
        background: #fee2e2;
        color: #991b1b;
        border-radius: 8px;
        text-align: center;
        font-weight: bold;
    }
</style>

<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-bold">Ticket #{{ $ticket->nomor_ticket }}</h1>
    <span class="px-3 py-1 text-sm font-semibold rounded-full
        {{ $ticket->status == 'Resolved' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
        {{ $ticket->status }}
    </span>
</div>

{{-- CHAT BOX --}}
<div class="chat-box">
    {{-- PERTANYAAN AWAL USER (Kanan) --}}
    <div class="chat-user">
        <div class="chat-name">You (Pertanyaan Awal)</div>
        <div>{{ $ticket->deskripsi }}</div>
    </div>

    {{-- LIST BALASAN --}}
    @foreach($balasan as $b)
        @if(!is_null($b->admin_id))
            {{-- ADMIN (KIRI) --}}
            <div class="chat-admin">
                <div class="chat-name">Admin</div>
                <div>{{ $b->pesan }}</div>
            </div>
        @else
            {{-- USER (KANAN) --}}
            <div class="chat-user">
                <div class="chat-name">You</div>
                <div>{{ $b->pesan }}</div>
            </div>
        @endif
    @endforeach
</div>

{{-- FORM CHAT (HANYA MUNCUL JIKA BELUM RESOLVED) --}}
@if($ticket->status !== 'Resolved')
    <form method="POST" action="/ticket/{{ $ticket->ticket_id }}/reply" class="chat-form">
        @csrf
        <textarea name="pesan" placeholder="Tulis balasan..." required></textarea>
        <button type="submit">Kirim Balasan</button>
    </form>
@else
    <div class="status-closed">
        Tiket ini telah ditandai sebagai Resolved. Anda tidak dapat mengirim balasan lagi.
    </div>
@endif

@endsection
