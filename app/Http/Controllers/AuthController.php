<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Jika login berhasil, redirect ke halaman tasks.index
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regenerasi session untuk keamanan
            return redirect()->route('tasks.index');
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan kesalahan
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->withInput($request->only('email'));
    }

    // Menampilkan form pendaftaran
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses pendaftaran
    public function register(Request $request)
    {
        // Validasi input pendaftaran
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Login otomatis setelah pendaftaran
        Auth::login($user);

        // Redirect ke halaman tasks.index setelah pendaftaran
        return redirect()->route('tasks.index');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna

        // Menghapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman home setelah logout
        return redirect()->route('home')->with('success', 'Anda telah logout.');
    }
}
