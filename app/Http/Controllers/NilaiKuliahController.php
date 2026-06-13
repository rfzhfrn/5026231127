<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiKuliah;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $data = NilaiKuliah::all();
        return view('NilaiKuliahIndex', compact('data'));
    }

    public function create()
    {
        return view('NilaiKuliahTambah');
    }

    public function store(Request $request)
    {
        NilaiKuliah::create([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

        return redirect('/nilaikuliah');
    }

    // Fungsi bantu untuk konversi nilai angka ke huruf
    public static function konversiHuruf($nilaiAngka)
    {
        if ($nilaiAngka <= 40) {
            return 'D';
        } elseif ($nilaiAngka <= 60) {
            return 'C';
        } elseif ($nilaiAngka <= 80) {
            return 'B';
        } else {
            return 'A';
        }
    }
}
