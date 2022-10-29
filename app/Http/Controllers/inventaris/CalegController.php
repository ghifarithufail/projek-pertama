<?php

namespace App\Http\Controllers\inventaris;


use App\Models\inventaris\Caleg;
use App\Models\inventaris\Partai;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast;
use App\Http\Controllers\Controller;


class CalegController extends Controller
{
    public function caleg(){
        $datacaleg = Partai::all();
        return view('calegCreate',compact('datacaleg'));
    }

    public function storeC(Request $request){
        $data = Caleg::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('fotocalon/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()-> route('calegs');
    }

    public function calegs(Request $request){

        if($request->has('search')){
            $data = Caleg::where('calon','LIKE','%' .$request->search. '%')-> paginate(5);
        }
        else{
            $data = Caleg::paginate(5);
        }
        return view('caleg', compact('data'));
    }

    public function dataupdateC($id, Request $request){
        $data = Caleg::find($id);
        $datacaleg = Partai::all();
        if($request->hasFile('image')){
            $request->file('image')->move('fotocalon/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return view('calegUpdate', compact('data'), compact('datacaleg'));
    }

    public function updateC(Request $request, $id){
        $data = Caleg::find($id);
        if($request->hasFile('image')){
            $request->file('image')->move('fotocalon/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        $data->update($request->all());

        return redirect()->route('calegs')->with('data berhasill di update');
    }

    public function deleteC($id){
        $data = Caleg::find($id);
        $data->delete();
        return redirect()-> route('calegs')->with('sukses','Data behasil dihapus');
    }
}
