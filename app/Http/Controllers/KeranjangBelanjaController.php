<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangBelanja;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $data = KeranjangBelanja::all();
        return view('KeranjangIndex', compact('data'));
    }

    public function create()
    {
        return view('KeranjangTambah');
    }

    public function store(Request $request)
    {
        KeranjangBelanja::create([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);

        return redirect('/keranjang');
    }

    public function destroy($id)
    {
        KeranjangBelanja::where('ID', $id)->delete();
        return redirect('/keranjang');
    }
}
