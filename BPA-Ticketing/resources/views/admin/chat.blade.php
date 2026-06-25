@extends('admin.layout')

@section('title', 'Admin Chat Ticket')

@section('content')

<link rel="stylesheet" href="{{ asset('css/chat-admin.css') }}">

<h1 class="title">
    Ticket #{{ $ticket->nomor_ticket ?? 'UNKNOWN' }}
</h1>

{{-- USER QUESTION --}}
<div class="question-box">
    <p class="label">Pertanyaan User</p>
    <p class="text">{{ $ticket->deskripsi }}</p>
</div>

{{-- CHAT BOX --}}
<div class="chat-box">

    @foreach($balasan as $b)

        @if($b->admin_id)
            {{-- ADMIN (KANAN) --}}
            <div class="chat-admin">
                <div class="name">Admin</div>
                <div>{{ $b->pesan }}</div>
            </div>
        @else
            {{-- USER (KIRI) --}}
            <div class="chat-user">
                <div class="name">User</div>
                <div>{{ $b->pesan }}</div>
            </div>
        @endif

    @endforeach

</div>

{{-- FORM REPLY ADMIN --}}
<form method="POST" action="/admin/ticket/{{ $ticket->ticket_id }}/reply" class="chat-form">
        @csrf

    <textarea name="pesan" placeholder="Balas sebagai admin..."></textarea>

    <button type="submit">Kirim</button>
</form>

@endsection