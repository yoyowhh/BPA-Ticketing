@extends('admin.layout')

@section('content')

<div class="topbar">
    <h1>Daftar Tiket Masuk</h1>
    <p>Total: {{ $total }} tiket</p>
</div>

{{-- FILTER BAR --}}
<div class="filter-bar">
    <form action="{{ url('/admin/tickets') }}" method="GET" id="filterForm">
        <select name="status" class="filter-select" onchange="document.getElementById('filterForm').submit()">
            <option value="Semua" {{ request('status') == 'Semua' ? 'selected' : '' }}>Semua Status</option>
            <option value="Open" {{ request('status') == 'Open' ? 'selected' : '' }}>Open</option>
            <option value="In Progress" {{ request('status') == 'In Progress' ? 'selected' : '' }}>In Progress</option>
            <option value="Resolved" {{ request('status') == 'Resolved' ? 'selected' : '' }}>Resolved</option>
        </select>
    </form>
</div>

{{-- LIST TIKET --}}
<div class="ticket-list">
    @foreach($tickets as $t)
    {{-- Arahkan ke route detail dengan ID --}}
    <a href="{{ url('/admin/ticket/'.$t->ticket_id) }}" class="ticket-link" style="text-decoration:none; color:inherit;">
        <div class="ticket-card">
            <div class="ticket-left">
                <h3>{{ $t->nomor_ticket }} - {{ $t->nama_kategori }}</h3>
                <p>{{ $t->deskripsi }}</p>
            </div>
            <div class="ticket-right">
                <span class="status {{ strtolower(str_replace(' ', '', $t->status)) }}">
                    {{ $t->status }}
                </span>
                <small>{{ \Carbon\Carbon::parse($t->created_at)->diffForHumans() }}</small>
            </div>
        </div>
    </a>
    @endforeach
</div>

@endsection
