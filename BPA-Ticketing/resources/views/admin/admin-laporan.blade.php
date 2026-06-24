@extends('admin.layout')

@section('title', 'Laporan')

@section('content')

<div class="topbar">
    <h1>Laporan Sistem</h1>
    <p>Ringkasan aktivitas tiket & performa sistem</p>
</div>

{{-- STAT OVERVIEW --}}
<div class="cards">

    <div class="card open">
        <p>Total Tiket</p>
        <h2>245</h2>
    </div>

    <div class="card progress">
        <p>Diproses</p>
        <h2>37</h2>
    </div>

    <div class="card resolved">
        <p>Selesai</p>
        <h2>198</h2>
    </div>

</div>

{{-- GRAFIK SIMULASI --}}
<div class="report-grid">

    <div class="report-box">
        <h3>Aktivitas Tiket Harian</h3>

        <div class="fake-chart">
            <div class="bar" style="height:40%"></div>
            <div class="bar" style="height:70%"></div>
            <div class="bar" style="height:55%"></div>
            <div class="bar" style="height:90%"></div>
            <div class="bar" style="height:60%"></div>
        </div>

        <p class="note">Simulasi grafik aktivitas (placeholder)</p>
    </div>

    <div class="report-box">

        <h3>Status Tiket</h3>

        <div class="status-list">

            <div class="status-row">
                <span>Open</span>
                <div class="status-bar open-bar"></div>
            </div>

            <div class="status-row">
                <span>Progress</span>
                <div class="status-bar progress-bar"></div>
            </div>

            <div class="status-row">
                <span>Resolved</span>
                <div class="status-bar resolved-bar"></div>
            </div>

        </div>

    </div>

</div>

{{-- TABLE LOG --}}
<div class="log-box">

    <h3>Log Aktivitas Terbaru</h3>

    <div class="log-item">
        <span>Admin menyelesaikan tiket #003</span>
        <small>2 menit lalu</small>
    </div>

    <div class="log-item">
        <span>User membuat tiket baru #010</span>
        <small>10 menit lalu</small>
    </div>

    <div class="log-item">
        <span>Ticket #008 di-assign ke admin</span>
        <small>30 menit lalu</small>
    </div>

</div>

@endsection