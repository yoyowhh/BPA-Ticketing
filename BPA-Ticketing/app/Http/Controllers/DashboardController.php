<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik
        $counts = [
            'open' => DB::table('ticket')->where('status', 'Open')->count(),
            'progress' => DB::table('ticket')->where('status', 'In Progress')->count(),
            'resolved' => DB::table('ticket')->where('status', 'Resolved')->count(),
        ];

        // Ticket Terbaru
        $recentTickets = DB::table('ticket')
            ->join('kategori', 'ticket.kategori_id', '=', 'kategori.kategori_id')
            ->orderBy('tanggal_dibuat', 'desc')
            ->limit(5)
            ->get();

        // Ticket On Progress oleh Admin ini
        // Kita join dengan tabel balasan untuk melihat siapa yang membalas terakhir kali
        $adminId = session('admin_id');
        $myProgressTickets = DB::table('ticket')
            ->join('balasan', 'ticket.ticket_id', '=', 'balasan.ticket_id')
            ->where('ticket.status', 'In Progress')
            ->where('balasan.admin_id', $adminId)
            ->select('ticket.*')
            ->distinct()
            ->get();

        return view('admin.dashboard', compact('counts', 'recentTickets', 'myProgressTickets'));
    }
}
