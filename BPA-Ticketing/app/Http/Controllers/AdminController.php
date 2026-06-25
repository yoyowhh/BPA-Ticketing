<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginPage()
    {
        // Disesuaikan dari 'admin.login' menjadi 'admin.admin-login'
        return view('admin.admin-login');
    }

    public function login(Request $request)
    {
        $admin = DB::table('admin')
            ->where('email', $request->email)
            ->first();

        if ($admin && password_verify($request->password, $admin->password)) {
            Session::put('admin_id', $admin->admin_id);
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Login gagal');
    }

    public function dashboard()
    {
        $countOpen = DB::table('ticket')->where('status', 'Open')->count();
        $countDone = DB::table('ticket')->where('status', 'Resolved')->count();

        // Disesuaikan dari 'admin.dashboard' menjadi 'admin.admin-dashboard'
        return view('admin.admin-dashboard', compact('countOpen', 'countDone'));
    }

  public function tickets(Request $request)
{
    // 1. Buat query dasar
    $query = DB::table('ticket')
        ->join('user', 'ticket.user_id', '=', 'user.user_id')
        ->join('kategori', 'ticket.kategori_id', '=', 'kategori.kategori_id');

    // 2. Filter berdasarkan status jika ada
    if ($request->filled('status') && $request->status !== 'Semua') {
        $query->where('ticket.status', $request->status);
    }

    // 3. Ambil data
    $tickets = $query->orderBy('ticket.created_at', 'desc')->get();

    // 4. HITUNG TOTAL (Ini yang kurang)
    $total = $tickets->count();

    // 5. Kirim data ke view
    return view('admin.admin-ticket', compact('tickets', 'total'));
}
public function detail($id)
{
    $ticket = DB::table('ticket')
        ->join('user', 'ticket.user_id', '=', 'user.user_id')
        ->join('kategori', 'ticket.kategori_id', '=', 'kategori.kategori_id')
        ->where('ticket_id', $id)
        ->first();

    // Gunakan leftJoin agar data balasan tetap tampil meskipun admin_id = NULL
    $balasan = DB::table('balasan')
        ->leftJoin('admin', 'balasan.admin_id', '=', 'admin.admin_id')
        ->where('ticket_id', $id)
        ->orderBy('created_at', 'asc')
        ->get();

    return view('admin.chat', compact('ticket', 'balasan'));
}
    public function reply(Request $request, $id)
{
    $adminId = Session::get('admin_id');

    // 1. Simpan balasan ke tabel 'balasan'
    DB::table('balasan')->insert([
        'ticket_id' => $id,
        'admin_id' => $adminId,
        'pesan' => $request->pesan,
        'created_at' => now()
    ]);

    // 2. Update status tiket menjadi 'In Progress' secara otomatis
    DB::table('ticket')
        ->where('ticket_id', $id)
        ->update(['status' => 'In Progress']);

    return back()->with('success', 'Balasan terkirim dan status diupdate menjadi In Progress');
}
   public function updateStatus(Request $request, $id)
{
    // Validasi
    $request->validate([
        'status' => 'required|in:Open,In Progress,Resolved,Closed'
    ]);

    // Update ke database
    DB::table('ticket')
        ->where('ticket_id', $id)
        ->update([
            'status' => $request->status,
            'updated_at' => now()
        ]);

    // WAJIB: Return agar halaman ter-refresh
    return back()->with('success', 'Status berhasil diupdate!');
}
}
