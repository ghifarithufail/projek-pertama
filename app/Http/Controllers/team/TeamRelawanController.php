<?php

namespace App\Http\Controllers\team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\team\team_relawan;

class TeamRelawanController extends Controller
{
    public function teamRelawan(Request $request){
    
        if($request->has('search')){
            $data = team_relawan::where('namateam','LIKE','%' .$request->search. '%')-> paginate(5);
        }
        else{
            $data = team_relawan::paginate(5);
        }
        return view('team_relawan', compact('data'));
    }
    
    public function dataTR(){
        return view('team_relawanCreate');
    }

    public function storeTR(Request $request){
        $data = team_relawan::create($request->all());
        $data->save();
        return Redirect()->route('teamrelawan');
    }

    public function updateRelawanteam($id){
        $data = team_relawan::find($id);
        return view('team_relawanUpdate', compact('data'));
    }

    public function udpateTR($id, Request $request){
        $data = team_relawan::find($id);
        $data->update($request->all());
        return redirect()->route('teamrelawan')->with('data berhasill di update');
    }

    public function deleteTR($id){
        $data = team_relawan::find($id);
        $data->delete();
        return redirect()-> route('teamrelawan')->with('sukses','Data behasil dihapus');
    }
}
