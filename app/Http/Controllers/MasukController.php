<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class MasukController extends Controller
{
    public function Masuk()
    {
        return view('admin.masuk');
    }

    public function postMasuk(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Cari pengguna berdasarkan username
        $pengguna = Pengguna::where('username', $credentials['username'])->first();

        // Jika pengguna ditemukan dan password cocok
        if ($pengguna && Hash::check($credentials['password'], $pengguna->password)) {
            // Login berhasil, set sesi pengguna
            $request->session()->put('pengguna', $pengguna);

            // Redirect ke halaman dashboard
            return redirect()->route('dashboard');
        } else {
            // Jika tidak cocok, kembalikan ke halaman login dengan pesan error
            return back()->withErrors([
                'credentials' => 'Username or password incorrect.',
            ]);
        }
    }
}
