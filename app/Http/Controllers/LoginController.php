<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
    public function showLoginForm()
{
    return view('masuk');
}

public function login(Request $request)
{
    // Validasi input
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Coba autentikasi pengguna
    if (auth()->attempt($credentials)) {
        // Jika autentikasi berhasil, redirect ke halaman dashboard atau halaman lainnya
        return redirect('dashboard')->intended('/dashboard');
    }

    // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
    return back('masuk')->withErrors([
        'email' => 'Email atau password salah',
    ]);
}

public function logout(Request $request)
{
    auth()->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}

}
