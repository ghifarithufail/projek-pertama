<?php

namespace App\Http\Controllers\team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\inventaris\Caleg;
use App\Models\team\HasilSuara;
use App\Models\team\koord_team;

class HasilSuaraController extends Controller
{
    public function hasilsuara(Request $request){
    
        if($request->has('search')){
            $data = HasilSuara::where('kelurahan','LIKE','%' .$request->search. '%')-> paginate(5);
        }
        else{
            $data = HasilSuara::paginate(5);
        }
        return view('Hasilsuara', compact('data'));
    }

    public function createHsuara(){
        $datacaleg = Caleg::all();
        $dataKoord_team = koord_team::all();
        return view('HasilsuaraCreate',compact('datacaleg'), compact('dataKoord_team'));
    }

    public function storeHS(Request $request){
        $data = HasilSuara::create($request->all());
        $data->save();
        return Redirect()->route('hasilsuara');
    }

    public function updateHsuara($id, Request $request){
        $data = HasilSuara::find($id);
        $datacaleg = Caleg::all();
        $dataKoord_team = koord_team::all();
        return view('HasilsuaraUpdate', compact('data'),compact('datacaleg','dataKoord_team'));
    }

    public function updateHS($id, Request $request){
        $data = HasilSuara::find($id);
        $data->update($request->all());
        return redirect()->route('hasilsuara')->with('data berhasill di update');
    }
}
