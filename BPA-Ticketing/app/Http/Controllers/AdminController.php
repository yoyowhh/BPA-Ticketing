<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
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

        return view('admin.dashboard', compact('countOpen', 'countDone'));
    }

    public function tickets()
    {
        $tickets = DB::table('ticket')
            ->join('user', 'ticket.user_id', '=', 'user.user_id')
            ->join('kategori', 'ticket.kategori_id', '=', 'kategori.kategori_id')
            ->get();

        return view('admin.tickets', compact('tickets'));
    }

    public function detail($id)
    {
        $ticket = DB::table('ticket')->where('ticket_id', $id)->first();

        $balasan = DB::table('balasan')
            ->where('ticket_id', $id)
            ->get();

        return view('admin.ticket-detail', compact('ticket', 'balasan'));
    }

    public function reply(Request $request, $id)
    {
        $adminId = Session::get('admin_id');

        DB::table('balasan')->insert([
            'ticket_id' => $id,
            'admin_id' => $adminId,
            'pesan' => $request->pesan,
            'created_at' => now()
        ]);

        DB::table('ticket')->where('ticket_id', $id)
            ->update(['status' => 'In Progress']);

        return back();
    }

    public function updateStatus(Request $request, $id)
    {
        DB::table('ticket')->where('ticket_id', $id)
            ->update(['status' => $request->status]);

        return back();
    }
}
