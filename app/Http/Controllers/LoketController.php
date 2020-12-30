<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loket;
use App\Models\Kota;
use App\Models\Layanan;

class LoketController extends Controller
{
    public function index()
    {
        $inputData = Loket::get();
        $loketDesa = Kota::all();
        $loketLayanan = Layanan::all();

        return view('loket.index', compact('inputData', 'loketDesa', 'loketLayanan' ));
    }

    public function store( Request $request)
    {
        $loketInput = [
            'no_berkas' => $request->no_berkas,
            'user_id' => auth()->id(),
            'tahun' => $request->tahun,
            'no_hak' => $request->no_hak,
            'jenis_hak' => $request->jenis_hak,
            'desa' => $request->desa,
            'kecamatan'=> $request->kecamatan,
            'layanan_id' => $request->layanan,
        ];
        // return $loketInput;

        Loket::create($loketInput);
        return redirect()->route('loket.index');
    }

    public function destroy(Loket $loket)
    {
        $loket->delete();
        return redirect()->back();

    }
}
