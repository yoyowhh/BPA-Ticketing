<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    // 1. Menampilkan halaman utama / welcome
    public function welcome()
    {
        return view('welcome');
    }

    // 2. Menampilkan halaman form input tiket
    public function create()
    {
        return view('ticket');
    }

    // 3. Menangkap data dari form tiket dan menyimpannya (Logika Backend)
    // Mengubah fungsi store agar mengarah ke route riwayat/detail
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim_nip' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'prodi_unit' => 'required|string|max:255',
            'kategori_bpa' => 'required|string',
            'pertanyaan' => 'required|string',
        ]);

        // Simulasi generate nomor tiket unik
        $nomorTiket = 'BPA-2026-' . rand(100, 999);

        // Di sini nanti tempat menyimpan data ke DB...

        // Redirect ke halaman riwayat detail tiket yang baru dibuat
        return redirect()->route('ticket.detail', ['nomor' => $nomorTiket])->with([
            'just_created' => true, // Flag penanda kalau tiket ini baru aja disubmit
            'kategori' => $request->kategori_bpa,
            'pengirim' => $request->nama,
            'pertanyaan' => $request->pertanyaan,
        ]);
    }

    // Fungsi baru untuk menampilkan detail riwayat tiket
    public function show($nomor)
    {
        // Nanti di sini tempat mengambil data dari DB berdasarkan $nomor
        // Untuk sekarang kita pakai data mock dari session atau default value
        $data = [
            'nomor_ticket' => $nomor,
            'kategori' => session('kategori', 'Data Mahasiswa'),
            'pengirim' => session('pengirim', 'Dina Nur Aulia'),
            'pertanyaan' => session('pertanyaan', 'Pertanyaan terkait pembaruan data mahasiswa untuk kebutuhan laporan.'),
            'waktu' => now()->format('H:i')
        ];

        return view('ticket-success', $data);
    }

    // 4. Menampilkan halaman sukses setelah kirim tiket (Mockup 5)
    public function success()
    {
        // Pastikan halaman ini hanya bisa diakses kalau abis submit form (punya session nomor_ticket)
        if (!session('nomor_ticket')) {
            return redirect('/dashboard');
        }

        return view('ticket-success');
    }

    // 5. Menampilkan halaman dashboard (Daftar Tiket)
    public function index()
    {
        return view('dashboard');
    }

    // 6. Menampilkan halaman identitas
    public function identitas()
    {
        return view('identitas');
    }
}