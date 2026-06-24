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
            <span>#101 - Verifikasi Sertifikasi Dosen</span>
            <span class="status open">Open</span>
        </div>

        <div class="ticket">
            <span>#102 - Update Data Mahasiswa</span>
            <span class="status progress">Progress</span>
        </div>

        <div class="ticket">
            <span>#103 - Sinkronisasi Kerjasama MoU</span>
            <span class="status resolved">Resolved</span>
        </div>

    </div>

<div class="filter-box">

    <h3>Filter</h3>

    {{-- STATUS --}}
    <select class="filter-item">
        <option value="">Semua Status</option>
        <option value="open">Open</option>
        <option value="progress">Progress</option>
        <option value="resolved">Resolved</option>
    </select>

    {{-- KATEGORI --}}
    <select class="filter-item">
        <option value="">Semua Kategori</option>
        <option value="sertifikasi">Data Sertifikasi Dosen</option>
        <option value="mahasiswa">Data Mahasiswa</option>
        <option value="magang">Program Magang Berdampak</option>
        <option value="kerjasama">Data Kerjasama</option>
    </select>

    {{-- PIC --}}
    <select class="filter-item">
        <option value="">Semua PIC</option>
        <option value="admin1">Admin 1</option>
        <option value="admin2">Admin 2</option>
        <option value="it-support">IT Support</option>
    </select>

</div>

</div>

<div class="footer-note">
    Sistem BPA Ticketing Admin Panel
</div>

@endsection