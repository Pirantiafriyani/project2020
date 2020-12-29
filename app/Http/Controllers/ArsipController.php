<?php

namespace App\Http\Controllers;

use App\Models\Loket;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
       $arsipData = Loket::get();

        return view('arsip.index', compact('arsipData'));
    }
}
