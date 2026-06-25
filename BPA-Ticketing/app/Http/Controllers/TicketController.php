<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
{
    $userId = session('user_id');

    $user = DB::table('user')->where('user_id', $userId)->first();

    $kategori = DB::table('kategori')->get();

    $ticketAktif = DB::table('ticket')
        ->where('user_id', $userId)
        ->whereIn('status', ['Open', 'In Progress'])
        ->orderBy('created_at', 'desc')
        ->first();

    return view('dashboard', compact('user', 'kategori', 'ticketAktif'));
}


public function create()
{
    $kategori = DB::table('kategori')->get();

    return view('ticket.create', compact('kategori'));
}
    public function store(Request $request)
    {
        $userId = Session::get('user_id');

        DB::table('ticket')->insert([
            'nomor_ticket' => 'TCK-' . rand(1000,9999),
            'user_id' => $userId,
            'kategori_id' => $request->kategori_id,
            'deskripsi' => $request->deskripsi,
            'status' => 'Open',
            'created_at' => now()
        ]);

        return redirect('/ticket/history');
    }

    public function history()
    {
        $userId = Session::get('user_id');

        $tickets = DB::table('ticket')
            ->join('kategori', 'ticket.kategori_id', '=', 'kategori.kategori_id')
            ->where('user_id', $userId)
            ->get();

        return view('ticket.history', compact('tickets'));
    }

   public function show($id)
{
    // 1. Ambil data tiket
    $ticket = DB::table('ticket')
        ->join('kategori', 'ticket.kategori_id', '=', 'kategori.kategori_id')
        ->where('ticket_id', $id)
        ->first();

    // 2. Gunakan leftJoin agar pesan dari User (admin_id=null) tetap muncul
    // Kita juga mengambil admin.nama_admin jika ada, tapi tidak memaksa join
    $balasan = DB::table('balasan')
        ->leftJoin('admin', 'balasan.admin_id', '=', 'admin.admin_id')
        ->where('balasan.ticket_id', $id)
        ->orderBy('balasan.created_at', 'asc')
        ->select('balasan.*', 'admin.nama_admin')
        ->get();

    return view('ticket.detail', compact('ticket', 'balasan'));
}

   public function reply(Request $request, $id)
{
    $isAdmin = session()->has('admin_id');
    $isUser = session()->has('user_id'); // Pastikan Anda set session user_id saat login user

    DB::table('balasan')->insert([
        'ticket_id'  => $id,
        'admin_id'   => $isAdmin ? session('admin_id') : null,
        'user_id'    => $isUser ? session('user_id') : null,
        'pesan'      => $request->pesan,
        'created_at' => now()
    ]);

    // Jika admin yang balas, ubah status ke In Progress
    if ($isAdmin) {
        DB::table('ticket')->where('ticket_id', $id)->update(['status' => 'In Progress']);
    }

    return back();
}

    public function close($id)
    {
        DB::table('ticket')->where('ticket_id', $id)
            ->update(['status' => 'Resolved']);

        return back();
    }

public function openAdminChat($id)
{
    $ticket = DB::table('ticket')
        ->where('ticket_id', $id)
        ->first();

    // 🔥 WAJIB SAFE GUARD
    if (!$ticket) {
        abort(404, 'Ticket tidak ditemukan');
    }

    $balasan = DB::table('balasan')
        ->where('ticket_id', $id)
        ->get();

    return view('admin.chat', compact('ticket', 'balasan'));
}

}
