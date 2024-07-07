<?php
namespace App\Http\Controllers;

use App\Models\Ikan;
use Illuminate\Http\Request;

class IkanController extends Controller
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
        $buah = new Ikan();
        $buah->nama = $validatedData['nama'];
        $buah->gambar = $gambarName;
        $buah->keterangan = $validatedData['keterangan'];
        $buah->harga = $validatedData['harga'];
        $buah->save();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses atau langsung tampilkan data baru
        return redirect()->route('menu_ikan')->with('success', 'Buah berhasil ditambahkan.');
    }

    public function editDaftarIkan()
    {
        $ikans = Ikan::all(); // Mengambil semua data sayur dari model Sayur
        return view('admin.menu_ikan', compact('ikans'));
    }
}