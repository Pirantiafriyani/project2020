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
}
