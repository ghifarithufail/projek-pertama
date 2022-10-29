<?php

namespace App\Http\Controllers\team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\team\koord_team;

class KoordTeamController extends Controller
{
    public function KoodTeam(Request $request){
    
        if($request->has('search')){
            $data = koord_team::where('codeteam','LIKE','%' .$request->search. '%')-> paginate(5);
        }
        else{
            $data = koord_team::paginate(5);
        }
        return view('koord_team', compact('data'));
    }

    public function dataKT(){
        return view('koord_teamCreate');
    }

    public function storeKT(Request $request){
        $data = koord_team::create($request->all());
        $data->save();
        return Redirect()->route('koordinatorTeam');
    }

    public function updateKoord_team($id){
        $data = koord_team::find($id);
        return view('koord_teamUpdate', compact('data'));
    }

    public function udpateKT($id, Request $request){
        $data = koord_team::find($id);
        $data->update($request->all());
        return redirect()->route('koordinatorTeam')->with('data berhasill di update');
    }

    public function deleteKT($id){
        $data = koord_team::find($id);
        $data->delete();
        return redirect()-> route('koordinatorTeam')->with('sukses','Data behasil dihapus');
    }
}
