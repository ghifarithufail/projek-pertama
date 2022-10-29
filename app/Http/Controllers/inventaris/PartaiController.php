<?php

namespace App\Http\Controllers\inventaris;

use App\Models\inventaris\Partai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PartaiController extends Controller
{
    public function index(){
        $jumlahpartai = Partai::count();
        return view('index', compact('jumlahpartai'));
    }

    public function data(){
        return view('partaiCreate');
    }

    public function store(Request $request){
        $data = Partai::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('fotopartai/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return Redirect()->route('partai');
    }

    public function partai(Request $request){

        if($request->has('search')){
            $data = Partai::where('nama','LIKE','%' .$request->search. '%')-> paginate(5);
        }
        else{
            $data = Partai::paginate(5);
        }
        return view('partai', compact('data'));
    }

    public function dataupdateP($id){
        $data = Partai::find($id);
        return view('partaiUpdate', compact('data'));
    }

    public function updateP(Request $request, $id){
        $data = Partai::find($id);
        if($request->hasFile('image')){
            $request->file('image')->move('fotopartai/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        $data->update($request->all());
        return redirect()->route('partai')->with('data berhasill di update');
    }

    public function deleteP($id){
        $data = Partai::find($id);
        $data->delete();
        return redirect()-> route('partai')->with('sukses','Data behasil dihapus');
    }
}
