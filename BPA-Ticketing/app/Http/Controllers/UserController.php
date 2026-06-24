<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile()
    {
        // ambil user dari session login
        $userId = session('user_id');

        // kalau belum login
        if (!$userId) {
            return redirect('/login')->with('error', 'Silakan login dulu');
        }

        // ambil data dari tabel user kamu
        $user = DB::table('user')
            ->where('user_id', $userId)
            ->first();

        return view('profile', compact('user'));
    }
}
