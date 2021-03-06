<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loket;
use App\Models\Kota;
use App\Models\Layanan;
use PhpParser\Node\Stmt\Else_;

class LoketController extends Controller
{
    public function index(Request $request)
    {
        $loketUpdate = Loket::find($request->id);
        // return $loketUpdate;
        if ($loketUpdate == null){
            $variabelUpdate = (object) [
                'action' => route('loket.store'),
                'method' => 'POST'
            ];
        } else {
            $variabelUpdate = (object) [
                'action' => route('loket.update', $request->id),
                'method' => 'PATCH'
            ];
        }

        $inputData = Loket::get();
        $loketDesa = Kota::orderBy('kecamatan')->get();
        $loketKecamatan = $loketDesa->pluck('id', 'kecamatan');

        $loketLayanan = Layanan::all();

        return view('loket.index', compact('inputData', 'loketDesa', 'loketKecamatan', 'loketLayanan', 'loketUpdate', 'variabelUpdate'));
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
            'status' => 1
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




    public function update(Request $request, $id)
    {

      
            $loket = Loket::find($id);
            $loket->update([
                'no_berkas' => $request->no_berkas,
                'tahun' => $request->tahun,
                'no_hak' => $request->no_hak,
                'jenis_hak' => $request->jenis_hak,
                'desa' => $request->desa,
                'kecamatan'=> $request->kecamatan,
                'layanan_id' => $request->layanan,
            ]);
            // return $loket;
            return redirect()->route('loket.index');
    }

    public function storeUpdate(Request $request, $id)
    {
        return $request;
    }

    // public function storeUpdate(Request $request, $id)
    // {
    //     // return $request->jenis;

    //     if ($request->jenis == 'post'){
    //         $inputLike = [
    //             'user_id' => Auth::user()->id,
    //             'post_id' => $id,
    //             'comment_id'=> null,
    //         ];

    //         $check = Like::where('post_id', $id)->where('user_id', Auth::user()->id);
    //         if ($check->count() > 0){
    //             $check->delete();
              
    //             return redirect()->back()->with('info', 'Anda Telah Unlike');
    //         }

    //     } else {
    //         $inputLike = [
    //             'user_id' => Auth::user()->id,
    //             'post_id' => null,
    //             'comment_id'=> $id,
    //         ];   
            
    //         $check = Like::where('comment_id', $id)->where('user_id', Auth::user()->id);
    //         if ($check->count() > 0){
    //             $check->delete();
    //             return redirect()->back()->with('info', 'Anda Telah Unlike');
    //         }
        
    //     }
          
    //     Like::create($inputLike);
        
    //     return redirect()->back()->with('success', 'Like Success');
    // }
}
