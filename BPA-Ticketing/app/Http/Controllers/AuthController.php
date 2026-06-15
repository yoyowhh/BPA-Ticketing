<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // =========================
    // LOGIN USER & ADMIN
    // =========================
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // =====================
        // CEK USER
        // =====================
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {

                Auth::login($user);

                session([
                    'role' => 'user',
                    'user_id' => $user->user_id,
                    'name' => $user->nama_lengkap
                ]);

                return redirect('/dashboard-user')->with('success', 'Login sebagai User berhasil');
            }
        }

        // =====================
        // CEK ADMIN
        // =====================
        $admin = Admin::where('email', $request->email)->first();

        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {

                Auth::login($admin);

                session([
                    'role' => 'admin',
                    'admin_id' => $admin->admin_id,
                    'name' => $admin->nama_admin
                ]);

                return redirect('/dashboard-admin')->with('success', 'Login sebagai Admin berhasil');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah'
        ]);
    }

    // =========================
    // LOGOUT
    // =========================
    public function logout()
    {
        Auth::logout();
        session()->flush();

        return redirect('/login')->with('success', 'Berhasil logout');
    }
}