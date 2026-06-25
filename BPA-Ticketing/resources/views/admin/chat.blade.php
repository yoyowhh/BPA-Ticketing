@extends('admin.layout')

@section('title', 'Admin Chat Ticket')

@section('content')

<link rel="stylesheet" href="{{ asset('css/chat-admin.css') }}">

<div class="header-action" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="title">Ticket #{{ $ticket->nomor_ticket ?? 'UNKNOWN' }}</h1>

    {{-- Tombol Resolved --}}
    @if($ticket->status !== 'Resolved')
        <form method="POST" action="/admin/ticket/{{ $ticket->ticket_id }}/update-status">
            @csrf
            <input type="hidden" name="status" value="Resolved">
            <button type="submit" class="btn-resolve" onclick="return confirm('Tandai tiket sebagai selesai?')">
                ✔ Tandai Selesai
            </button>
        </form>
    @else
        <span class="badge-resolved">Status: Resolved</span>
    @endif
</div>

{{-- USER QUESTION --}}
<div class="question-box">
    <p class="label">Pertanyaan User</p>
    <p class="text">{{ $ticket->deskripsi }}</p>
</div>

{{-- CHAT BOX --}}
<div class="chat-box">
    @foreach($balasan as $b)
        @if($b->admin_id)
            <div class="chat-admin">
                <div class="name">Admin</div>
                <div>{{ $b->pesan }}</div>
            </div>
        @else
            <div class="chat-user">
                <div class="name">User</div>
                <div>{{ $b->pesan }}</div>
            </div>
        @endif
    @endforeach
</div>

{{-- FORM REPLY ADMIN --}}
@if($ticket->status !== 'Resolved')
    <form method="POST" action="/admin/ticket/{{ $ticket->ticket_id }}/reply" class="chat-form">
        @csrf
        <textarea name="pesan" placeholder="Balas sebagai admin..." required></textarea>
        <button type="submit">Kirim Balasan</button>
    </form>
@else
    <p style="text-align: center; color: #888;">Tiket sudah selesai dan tidak dapat dibalas.</p>
@endif

@endsection
