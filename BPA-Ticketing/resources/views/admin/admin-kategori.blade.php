@extends('admin.layout')

@section('title', 'Kategori')

@section('content')

<div class="topbar">
    <h1>Kategori Tiket</h1>
    <p>Kelola kategori laporan pengguna</p>
</div>

{{-- FORM TAMBAH --}}
<div class="card-form">

    <h3>Tambah Kategori Baru</h3>

    <div class="form-group">
        <input type="text" placeholder="Nama kategori..." class="input-box">
        <button class="btn-add">Tambah</button>
    </div>

</div>

{{-- LIST KATEGORI --}}
<div class="category-list">

    <div class="category-card">
        <span>Data Sertifikasi Dosen</span>
        <div class="action">
            <button class="btn-edit">Edit</button>
            <button class="btn-delete">Hapus</button>
        </div>
    </div>

    <div class="category-card">
        <span>Program Magang Berdampak</span>
        <div class="action">
            <button class="btn-edit">Edit</button>
            <button class="btn-delete">Hapus</button>
        </div>
    </div>

    <div class="category-card">
        <span>Data Mahasiswa</span>
        <div class="action">
            <button class="btn-edit">Edit</button>
            <button class="btn-delete">Hapus</button>
        </div>
    </div>

    <div class="category-card">
        <span>Data Kerjasama</span>
        <div class="action">
            <button class="btn-edit">Edit</button>
            <button class="btn-delete">Hapus</button>
        </div>
    </div>

</div>

@endsection