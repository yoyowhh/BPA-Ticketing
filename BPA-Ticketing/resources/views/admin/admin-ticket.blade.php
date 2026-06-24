@extends('admin.layout')

@section('title', 'Daftar Tiket')

@section('content')

<div class="topbar">
    <h1>Daftar Tiket Masuk</h1>
    <p>Total: 4 tiket aktif</p>
</div>

{{-- FILTER BAR --}}
<div class="filter-bar">

    <input type="text" placeholder="Cari tiket..." class="search-box">

    <select class="filter-select">
        <option>Semua Status</option>
        <option>Open</option>
        <option>Progress</option>
        <option>Resolved</option>
    </select>

</div>

{{-- LIST TIKET --}}
<div class="ticket-list">

    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#001 - Login Error</h3>
            <p>User tidak bisa login ke sistem</p>
        </div>
        <div class="ticket-right">
            <span class="status open">Open</span>
            <small>2 menit lalu</small>
        </div>
    </div>

    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#002 - Server Down</h3>
            <p>Website tidak bisa diakses</p>
        </div>
        <div class="ticket-right">
            <span class="status progress">Progress</span>
            <small>10 menit lalu</small>
        </div>
    </div>

    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#003 - Bug UI</h3>
            <p>Tampilan dashboard berantakan</p>
        </div>
        <div class="ticket-right">
            <span class="status resolved">Resolved</span>
            <small>1 jam lalu</small>
        </div>
    </div>

    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#004 - Reset Password</h3>
            <p>Email reset tidak masuk</p>
        </div>
        <div class="ticket-right">
            <span class="status open">Open</span>
            <small>2 jam lalu</small>
        </div>
    </div>

</div>

@endsection