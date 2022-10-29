<?php

namespace App\Http\Controllers\team;
use App\Http\Controllers\Controller;
use App\Models\inventaris\Kelurahan;
use App\Models\team\Relawan;
use Illuminate\Http\Request;

class RelawanController extends Controller
{

    public function relawan(Request $request){
    
        if($request->has('search')){
            $data = Relawan::where('nama','LIKE','%' .$request->search. '%')-> paginate(5);
        }
        else{
            $data = Relawan::paginate(5);
        }
        return view('relawan', compact('data'));
    }

    public function createRelawan(){
        $datakelurahan = Kelurahan::all();
        return view('relawanCreate',compact('datakelurahan'));
    }

    public function storeR(Request $request){
        $data = Relawan::create($request->all());
        $data->save();
        return Redirect()->route('relawan');
    }

    public function updateRelawan($id, Request $request){
        $data = Relawan::find($id);
        $datakelurahan = Kelurahan::all();
        return view('relawanUpdate', compact('data'), compact('datakelurahan'));
    }

    public function udpateR($id, Request $request){
        $data = Relawan::find($id);
        $data->update($request->all());
        return redirect()->route('relawan')->with('data berhasill di update');
    }

    public function deleteR($id){
        $data = Relawan::find($id);
        $data->delete();
        return redirect()-> route('relawan')->with('sukses','Data behasil dihapus');
    }
}
