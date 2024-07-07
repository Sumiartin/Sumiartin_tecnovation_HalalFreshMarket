<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sayur;
use App\Models\Buah;
use App\Models\Ikan;

class KelolaController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // TABEL DAFTAR MENU
    public function menuSayur()
    {
        $sayurs = Sayur::all(); // Mengambil semua data sayur dari model Sayur
        return view('admin.menu_sayur', compact('sayurs'));
    }

    public function menuBuah()
    {
        $buahs = Buah::all(); // Mengambil semua data buah dari model Buah
        return view('admin.menu_buah', compact('buahs'));
    }

    public function menuIkan()
    {
        $ikans = Ikan::all(); // Mengambil semua data sayur dari model Sayur
        return view('admin.menu_ikan', compact('ikans'));
    }

    // TAMBAH DAFTAR MENU
    public function tambahBuah()
    {
        return view('admin.tambah_buah');
    }

    public function tambahIkan()
    {
        return view('admin.tambah_ikan');
    }

    public function tambahSayur()
    {
        return view('admin.tambah_sayur');
    }

    public function Masuk()
    {
        return view('admin.masuk');
    }

    public function simpanSayur(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required|string',
            'harga' => 'required|numeric',
        ]);
    
        // Upload gambar
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);
    
        // Simpan data ke database
        Sayur::create([
            'nama' => $validated['nama'],
            'gambar' => $imageName,
            'keterangan' => $validated['keterangan'],
            'harga' => $validated['harga'],
        ]);
    
        return redirect()->route('menu_sayur')->with('success', 'Sayur berhasil ditambahkan!');
    }

    public function hapusSayur($id)
    {
        $sayur = Sayur::findOrFail($id);

        // Hapus gambar dari direktori
        $imagePath = public_path('images/' . $sayur->gambar);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Hapus data dari database
        $sayur->delete();

        return redirect()->route('menu_sayur')->with('success', 'Sayur berhasil dihapus!');
    }

    public function simpanBuah(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        // Simpan data ke database
        Buah::create([
            'nama' => $validated['nama'],
            'gambar' => $imageName,
            'keterangan' => $validated['keterangan'],
            'harga' => $validated['harga'],
        ]);

        return redirect()->route('menu_buah')->with('success', 'Buah berhasil ditambahkan!');
    }

    public function hapusBuah($id)
    {
        $buah = Buah::findOrFail($id);

        // Hapus gambar dari direktori
        $imagePath = public_path('images/' . $buah->gambar);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Hapus data dari database
        $buah->delete();

        return redirect()->route('menu_buah')->with('success', 'Buah berhasil dihapus!');
    }

    public function simpanIkan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        // Simpan data ke database
        Ikan::create([
            'nama' => $validated['nama'],
            'gambar' => $imageName,
            'keterangan' => $validated['keterangan'],
            'harga' => $validated['harga'],
        ]);

        return redirect()->route('menu_ikan')->with('success', 'Ikan berhasil ditambahkan!');
    }

    public function hapusIkan($id)
    {
        $ikan = Ikan::findOrFail($id);

        // Hapus gambar dari direktori
        $imagePath = public_path('images/' . $ikan->gambar);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Hapus data dari database
        $ikan->delete();

        return redirect()->route('menu_ikan')->with('success', 'Ikan berhasil dihapus!');
    }
}
