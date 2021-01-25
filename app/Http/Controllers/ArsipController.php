<?php

namespace App\Http\Controllers;

use App\Models\Loket;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        $data = (object) [
            'requests' => Loket::with('user')->where('status', 1)->get(),
            'processes' => Loket::with('user')->where('status', 2)->get()
        ];

        return view('arsip.index', compact('data'));
    }

    public function status(Request $request, $status)
    {
        if($status == 2)
            $statusStr = 'Di Proses';
        else
            $statusStr = 'Tersedia';

        if($request->ids) :
            foreach ($request->ids as $id) :
                $loket = Loket::find($id);
                $loket->status = $status;
                $loket->save();
            endforeach;
        
        endif;
        
        notify()->info("Data berhasil $statusStr ⚡️", "Berhasil");
        return redirect()->route('arsip.index');
    }
}
