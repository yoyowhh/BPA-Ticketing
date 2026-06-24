<aside class="sidebar">

    <div class="sidebar-header">
        <h2>BPA Super Admin</h2>
    </div>

    <ul class="sidebar-menu">

        <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a href="/admin/dashboard">Beranda</a>
        </li>

        <li class="{{ request()->is('admin/tickets') ? 'active' : '' }}">
            <a href="/admin/tickets">Daftar Tiket</a>
        </li>

        <li class="{{ request()->is('admin/kategori') ? 'active' : '' }}">
            <a href="/admin/kategori">Kategori</a>
        </li>

        <li class="{{ request()->is('admin/pengguna') ? 'active' : '' }}">
            <a href="/admin/pengguna">Pengguna</a>
        </li>

        <li class="{{ request()->is('admin/laporan') ? 'active' : '' }}">
            <a href="/admin/laporan">Laporan</a>
        </li>

    </ul>

    <div class="sidebar-footer">
    <p>Login sebagai</p>
    <strong>Admin</strong>
</div>

</aside>