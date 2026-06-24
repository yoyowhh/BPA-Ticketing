<aside class="sidebar">

    <div class="sidebar-header">
        <h2>BPA Super Admin</h2>
    </div>

    <ul class="sidebar-menu">

        <li class="{{ request()->is('admin/admin-dashboard') ? 'active' : '' }}">
            <a href="/admin/admin-dashboard">Beranda</a>
        </li>

        <li class="{{ request()->is('admin/admin-ticket') ? 'active' : '' }}">
            <a href="/admin/admin-ticket">Daftar Tiket</a>
        </li>

        <li class="{{ request()->is('admin/admin-kategori') ? 'active' : '' }}">
            <a href="/admin/admin-kategori">Kategori</a>
        </li>

        <li class="{{ request()->is('admin/admin-pengguna') ? 'active' : '' }}">
            <a href="/admin/admin-pengguna">Pengguna</a>
        </li>

        <li class="{{ request()->is('admin/admin-laporan') ? 'active' : '' }}">
            <a href="/admin/admin-laporan">Laporan</a>
        </li>

    </ul>

    <div class="sidebar-footer">
    <p>Login sebagai</p>
    <strong>Admin</strong>
</div>

</aside>