<?php

namespace App\Http\Controllers\inventaris;

use App\Models\inventaris\Kelurahan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelurahanController extends Controller
{
    public function kelurahan(Request $request){
    
        if($request->has('search')){
            $data = Kelurahan::where('kelurahan','LIKE','%' .$request->search. '%')-> paginate(5);
        }
        else{
            $data = Kelurahan::paginate(5);
        }
        return view('kelurahan', compact('data'));
    }

    public function dataK(){
        return view('kelurahanCreate');
    }

    public function storeK(Request $request){
        $data = Kelurahan::create($request->all());
        $data->save();
        return Redirect()->route('kelurahan');
    }


    public function updateKelurahan($id){
        $data = Kelurahan::find($id);
        return view('kelurahanUpdate', compact('data'));
    }

    public function udpateK($id, Request $request){
        $data = Kelurahan::find($id);
        $data->update($request->all());
        return redirect()->route('kelurahan')->with('data berhasill di update');
    }

    public function deleteK($id){
        $data = Kelurahan::find($id);
        $data->delete();
        return redirect()-> route('kelurahan')->with('sukses','Data behasil dihapus');
    }
}
