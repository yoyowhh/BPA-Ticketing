@extends('admin.layout')

@section('title', 'Pengguna')

@section('content')

<div class="topbar">
    <h1>Manajemen Pengguna</h1>
    <p>Daftar user yang terdaftar di sistem</p>
</div>

{{-- STAT MINI --}}
<div class="cards">

    <div class="card open">
        <p>Total User</p>
        <h2>120</h2>
    </div>

    <div class="card progress">
        <p>User Aktif</p>
        <h2>98</h2>
    </div>

    <div class="card resolved">
        <p>Admin</p>
        <h2>5</h2>
    </div>

</div>

{{-- SEARCH + FILTER --}}
<div class="filter-bar">

    <input type="text" placeholder="Cari pengguna..." class="search-box">

    <select class="filter-select">
        <option>Semua Role</option>
        <option>Admin</option>
        <option>User</option>
    </select>

</div>

{{-- LIST USER --}}
<div class="user-list">

    <div class="user-card">
        <div class="user-info">
            <h3>Dina Pratiwi</h3>
            <p>dina@email.com</p>
        </div>
        <span class="role admin">Admin</span>
    </div>

    <div class="user-card">
        <div class="user-info">
            <h3>Budi Santoso</h3>
            <p>budi@email.com</p>
        </div>
        <span class="role user">User</span>
    </div>

    <div class="user-card">
        <div class="user-info">
            <h3>Siti Aminah</h3>
            <p>siti@email.com</p>
        </div>
        <span class="role user">User</span>
    </div>

</div>

@endsection