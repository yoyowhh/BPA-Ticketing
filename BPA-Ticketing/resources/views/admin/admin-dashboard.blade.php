@extends('admin.layout')
@section('content')

{{-- Mengambil data langsung di View --}}
@php
    use Illuminate\Support\Facades\DB;

    $adminId = session('admin_id');

    // Statistik
    $countOpen = DB::table('ticket')->where('status', 'Open')->count();
    $countProgress = DB::table('ticket')->where('status', 'In Progress')->count();
    $countResolved = DB::table('ticket')->where('status', 'Resolved')->count();

    // Tiket Terbaru
    $recentTickets = DB::table('ticket')
        ->join('kategori', 'ticket.kategori_id', 'kategori.kategori_id')
        ->orderBy('ticket.created_at', 'desc')->limit(5)->get();

    // Tiket yang sedang dikerjakan admin ini
    $myTickets = DB::table('ticket')
        ->where('status', 'In Progress')
        ->whereIn('ticket_id', DB::table('balasan')->where('admin_id', $adminId)->pluck('ticket_id'))
        ->get();
@endphp

<div class="cards">
    <div class="card open"><p>Open</p><h2>{{ $countOpen }}</h2></div>
    <div class="card progress"><p>In Progress</p><h2>{{ $countProgress }}</h2></div>
    <div class="card resolved"><p>Resolved</p><h2>{{ $countResolved }}</h2></div>
</div>

<div class="content">
    {{-- Ticket Terbaru --}}
    <div class="ticket-box">
        <h3>Ticket Terbaru</h3>
        @foreach($recentTickets as $t)
            <div class="ticket">
                <span>#{{ $t->nomor_ticket }} - {{ $t->nama_kategori }}</span>
                <span class="status {{ strtolower($t->status) }}">{{ $t->status }}</span>
            </div>
        @endforeach
    </div>

    {{-- Tiket yang saya kerjakan --}}
    <div class="ticket-box">
        <h3>Tiket Sedang Dikerjakan</h3>
        @forelse($myTickets as $t)
            <div class="ticket" onclick="location.href='{{ url('/admin/ticket/'.$t->ticket_id) }}'" style="cursor:pointer">
                <span>#{{ $t->nomor_ticket }} - {{ $t->deskripsi }}</span>
                <span class="status progress">Chat</span>
            </div>
        @empty
            <p>Tidak ada tiket dalam progres.</p>
        @endforelse
    </div>
</div>
@endsection
