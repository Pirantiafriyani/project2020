<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loket;


class LoketController extends Controller
{
    public function index()
    {
        $inputData = Loket::get();

        return view('loket.index', compact('inputData'));
    }
}
