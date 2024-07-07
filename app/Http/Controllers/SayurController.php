<?php
namespace App\Http\Controllers;

use App\Models\Sayur;
use Illuminate\Http\Request;

class SayurController extends Controller
{
    public function simpan(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        // Proses menyimpan gambar
        $gambarPath = $request->file('gambar')->store('public/images');
        $gambarName = basename($gambarPath);

        // Simpan data sayur ke dalam database
        $sayur = new Sayur();
        $sayur->nama = $validatedData['nama'];
        $sayur->gambar = $gambarName;
        $sayur->keterangan = $validatedData['keterangan'];
        $sayur->harga = $validatedData['harga'];
        $sayur->save();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses atau langsung tampilkan data baru
        return redirect()->route('menu_sayur')->with('success', 'Sayur berhasil ditambahkan.');
    }

    public function editDaftarSayur()
    {
        $sayurs = Sayur::all(); // Mengambil semua data sayur dari model Sayur
        return view('admin.menu_sayur', compact('sayurs'));
    }
}