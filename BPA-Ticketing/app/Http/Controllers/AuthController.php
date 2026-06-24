<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // ======================
    // REGISTER PAGE
    // ======================
    public function showRegister()
    {
        return view('auth.register');
    }

    // ======================
    // REGISTER PROCESS
    // ======================
    public function register(Request $request)
    {
        DB::table('user')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'nim_nip' => $request->nim_nip,
            'status' => $request->status,
            'prodi_unit' => $request->prodi_unit,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'created_at' => now()
        ]);

        return redirect('/login');
    }

    // ======================
    // LOGIN PAGE
    // ======================
    public function showLogin()
    {
        return view('auth.login');
    }

    // ======================
    // LOGIN PROCESS
    // ======================
    public function login(Request $request)
    {
        $user = DB::table('user')
            ->where('email', $request->email)
            ->first();

        if ($user && password_verify($request->password, $user->password)) {

            session([
                'user_id' => $user->user_id,
                'user_name' => $user->nama_lengkap
            ]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }

    // ======================
    // LOGOUT
    // ======================
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
