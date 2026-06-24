<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="container">

    {{-- SIDEBAR --}}
    @include('admin.admin-sidebar')

    {{-- MAIN CONTENT --}}
    <div class="main">
        @yield('content')
    </div>

</div>

</body>
</html>