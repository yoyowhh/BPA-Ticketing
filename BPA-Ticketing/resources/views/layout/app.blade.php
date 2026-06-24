<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA Ticketing</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-white h-screen overflow-hidden">

<div class="flex h-screen">

    {{-- SIDEBAR --}}
    @include('partials.sidebar')

    {{-- CONTENT --}}
    <main class="flex-1 overflow-y-auto p-12 bg-white">
        @yield('content')
    </main>

</div>

</body>
</html>
