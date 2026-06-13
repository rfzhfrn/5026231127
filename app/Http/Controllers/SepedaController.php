<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepeda;

class SepedaController extends Controller
{
    public function index()
    {
        $data = Sepeda::all();
        return view('sepeda.index', compact('data'));
    }

    public function create()
    {
        return view('sepeda.tambah');
    }

    public function store(Request $request)
    {
        Sepeda::create([
            'merksepeda'  => $request->merksepeda,
            'stocksepeda' => $request->stocksepeda,
            'tersedia'    => $request->tersedia,
        ]);

        return redirect('/sepeda');
    }

    public function edit($id)
    {
        $sepeda = Sepeda::findOrFail($id);
        return view('sepeda.edit', compact('sepeda'));
    }

    public function update(Request $request, $id)
    {
        $sepeda = Sepeda::findOrFail($id);
        $sepeda->update([
            'merksepeda'  => $request->merksepeda,
            'stocksepeda' => $request->stocksepeda,
            'tersedia'    => $request->tersedia,
        ]);

        return redirect('/sepeda');
    }

    public function destroy($id)
    {
        Sepeda::findOrFail($id)->delete();
        return redirect('/sepeda');
    }
}
