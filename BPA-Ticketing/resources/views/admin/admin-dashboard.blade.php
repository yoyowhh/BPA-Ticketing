@extends('admin.layout')

@section('title', 'Dashboard Admin')

@section('content')

<div class="topbar">
    <h1>Dashboard BPA Ticketing</h1>
    <p>Update terakhir: {{ date('d M Y - H:i') }}</p>
</div>

<div class="cards">

    <div class="card open">
        <p>Open Ticket</p>
        <h2>18</h2>
    </div>

    <div class="card progress">
        <p>In Progress</p>
        <h2>7</h2>
    </div>

    <div class="card resolved">
        <p>Resolved</p>
        <h2>31</h2>
    </div>

</div>

<div class="content">

    <div class="ticket-box">

        <h3>Ticket Terbaru</h3>

        <div class="ticket">
            <span>#001 Login Error</span>
            <span class="status open">Open</span>
        </div>

        <div class="ticket">
            <span>#002 Server Down</span>
            <span class="status progress">Progress</span>
        </div>

        <div class="ticket">
            <span>#003 UI Bug</span>
            <span class="status resolved">Resolved</span>
        </div>

    </div>

    <div class="filter-box">

        <h3>Filter</h3>

        <div class="filter-item">Semua Status</div>
        <div class="filter-item">Kategori</div>
        <div class="filter-item">PIC</div>

    </div>

</div>

<div class="footer-note">
    Sistem BPA Ticketing Admin Panel
</div>

@endsection