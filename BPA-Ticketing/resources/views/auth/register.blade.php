<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

<form method="POST" action="/register" class="bg-white p-6 rounded shadow w-96">
    @csrf

    <h2 class="text-xl font-bold mb-4">Register</h2>

    <input name="nama_lengkap" placeholder="Nama Lengkap" class="border w-full p-2 mb-2">

    <input name="nim_nip" placeholder="NIM/NIP" class="border w-full p-2 mb-2">

    <select name="status" class="border w-full p-2 mb-2">
        <option>Mahasiswa</option>
        <option>Dosen</option>
        <option>Pegawai</option>
    </select>

    <input name="prodi_unit" placeholder="Prodi/Unit" class="border w-full p-2 mb-2">

    <input name="email" placeholder="Email" class="border w-full p-2 mb-2">

    <input type="password" name="password" placeholder="Password" class="border w-full p-2 mb-2">

    <button class="bg-black text-white w-full py-2">
        Register
    </button>

    <p class="text-sm mt-3">
        Sudah punya akun? <a href="/login" class="text-blue-500">Login</a>
    </p>
</form>

</body>
</html>
