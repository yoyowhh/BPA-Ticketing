@extends('layout.app')

@section('content')

<style>
/* =====================
   CHAT UI (USER)
===================== */

.chat-box {
    display: flex;
    flex-direction: column;
    gap: 10px;

    margin-top: 15px;
    padding: 15px;

    background: #f9fafb;
    border-radius: 12px;

    max-height: 65vh;
    overflow-y: auto;
}

/* USER (KIRI) */
.chat-user {
    align-self: flex-start;

    background: #e5e7eb;
    padding: 10px 14px;
    border-radius: 12px;

    max-width: 60%;
}

/* ADMIN (KANAN) */
.chat-admin {
    align-self: flex-end;

    background: #d1fae5;
    padding: 10px 14px;
    border-radius: 12px;

    max-width: 60%;
}

/* LABEL */
.chat-name {
    font-size: 11px;
    font-weight: bold;
    opacity: 0.7;
    margin-bottom: 3px;
}

/* INPUT */
.chat-form textarea {
    width: 100%;
    border: 1px solid #ddd;
    padding: 12px;
    border-radius: 8px;
    margin-top: 15px;
}

.chat-form button {
    margin-top: 10px;
    background: black;
    color: white;
    padding: 10px 16px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
}

.chat-form button:hover {
    opacity: 0.85;
}

</style>

<h1 class="text-xl font-bold mb-4">
    Ticket #{{ $ticket->nomor_ticket }}
</h1>

{{-- PERTANYAAN USER --}}
<div class="mb-6">
    <div class="bg-blue-100 p-4 rounded-lg max-w-xl">
        <p class="text-sm font-bold text-blue-700">Pertanyaan</p>
        <p class="text-gray-800 mt-1">
            {{ $ticket->deskripsi }}
        </p>
    </div>
</div>

{{-- CHAT BOX --}}
<div class="chat-box">

    @foreach($balasan as $b)

        @if($b->admin_id)
            {{-- ADMIN --}}
            <div class="chat-admin">
                <div class="chat-name">Admin</div>
                <div>{{ $b->pesan }}</div>
            </div>
        @else
            {{-- USER --}}
            <div class="chat-user">
                <div class="chat-name">You</div>
                <div>{{ $b->pesan }}</div>
            </div>
        @endif

    @endforeach

</div>

{{-- FORM CHAT --}}
<form method="POST" action="/ticket/{{ $ticket->ticket_id }}/reply" class="chat-form">
    @csrf

    <textarea name="pesan" placeholder="Tulis balasan..."></textarea>

    <button type="submit">
        Kirim
    </button>
</form>

@endsection