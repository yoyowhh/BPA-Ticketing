<aside class="w-64 bg-[#F8F9FA] border-r border-gray-100 flex flex-col justify-between py-10 px-8">

    <div class="flex flex-col gap-12">

        <h1 class="text-xl font-bold text-black">
            BPA Ticketing
        </h1>

        <nav>
            <ul class="space-y-6">

                <li>
                    <a href="/dashboard"
                       class="{{ request()->is('dashboard') ? 'sidebar-active' : 'sidebar-link' }}">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="/ticket/create"
                       class="{{ request()->is('ticket/create') ? 'sidebar-active' : 'sidebar-link' }}">
                        Buat Tiket
                    </a>
                </li>

                <li>
                    <a href="/ticket/history"
                       class="{{ request()->is('ticket/history*') ? 'sidebar-active' : 'sidebar-link' }}">
                        Riwayat Tiket
                    </a>
                </li>

                <li>
                    <a href="/profile"
                       class="{{ request()->is('profile') ? 'sidebar-active' : 'sidebar-link' }}">
                        Profil
                    </a>
                </li>

            </ul>
        </nav>

    </div>

    <div class="pt-6 border-t border-gray-200">
        <p class="text-xs text-gray-400">Login sebagai</p>
        <p class="font-semibold text-sm text-gray-700">
            {{ session('user_name') }}
        </p>
    </div>

</aside>
