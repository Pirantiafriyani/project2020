<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Loket;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $loketDesa = Kota::orderBy('kecamatan')->get();
       $arsipData = Loket::get();

        return view('history.index', compact('arsipData', 'loketDesa'));
    }
}
