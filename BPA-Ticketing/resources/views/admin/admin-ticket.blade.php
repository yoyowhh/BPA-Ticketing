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

    {{-- 1 --}}
    <a href="/admin/ticket/101" class="ticket-link">
    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#101 - Verifikasi Sertifikasi Dosen</h3>
            <p>Data sertifikasi belum sinkron di sistem PDDikti</p>
        </div>
        <div class="ticket-right">
            <span class="status open">Open</span>
            <small>5 menit lalu</small>
        </div>
    </div>
</a>

    {{-- 2 --}}
    <a href="/admin/ticket/102" class="ticket-link">
    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#102 - Update Data Mahasiswa</h3>
            <p>Perubahan data NIM dan prodi tidak tersimpan</p>
        </div>
        <div class="ticket-right">
            <span class="status progress">Progress</span>
            <small>10 menit lalu</small>
        </div>
    </div>

    {{-- 3 --}}
    <a href="/admin/ticket/103" class="ticket-link"></a>
    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#103 - Sinkronisasi Kerjasama MoU</h3>
            <p>Data kerja sama dengan mitra belum muncul di dashboard</p>
        </div>
        <div class="ticket-right">
            <span class="status resolved">Resolved</span>
            <small>30 menit lalu</small>
        </div>
    </div>

    {{-- 4 --}}
    <a href="/admin/ticket/104" class="ticket-link"></a>
    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#104 - Pendaftaran Magang MBKM</h3>
            <p>Mahasiswa gagal submit program magang berdampak</p>
        </div>
        <div class="ticket-right">
            <span class="status open">Open</span>
            <small>1 jam lalu</small>
        </div>
    </div>

    {{-- 5 --}}
    <a href="/admin/ticket/105" class="ticket-link"></a>
    <div class="ticket-card">
        <div class="ticket-left">
            <h3>#105 - Error Upload Dokumen BKD</h3>
            <p>File sertifikasi dosen gagal diupload ke server</p>
        </div>
        <div class="ticket-right">
            <span class="status progress">Progress</span>
            <small>2 jam lalu</small>
        </div>
    </div>

</div>

@endsection