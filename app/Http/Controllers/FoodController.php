<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buah; // Impor model Buah di sini
use App\Models\Ikan;
use App\Models\Sayur;

class FoodController extends Controller
{
    public function index()
    {
        $buahs = Buah::all(); // Mengambil semua data buah dari model Buah
        return view('food.detail_buah', compact('buahs'));
    }

    public function detailIkan()
    {
        $ikans = Ikan::all(); // Mengambil semua data buah dari model Buah
        return view('food.detail_ikan', compact('ikans'));
    }

    public function detailSayuran()
    {
        $sayurs = Sayur::all(); // Mengambil semua data buah dari model Buah
        return view('food.detail_sayuran', compact('sayurs'));
    }

}
