<?php

namespace App\Http\Controllers\Local;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reclamation;
use App\Models\Filiere;
use App\User;
use Illuminate\Support\Facades\Auth;

class ReclamationController extends Controller
{
    //
    public function index(){
        $local = Reclamation::OrderBy('id')->paginate(5);
        $local = Reclamation::all()->where('actif',1);
        $filiere = Filiere::all();
        return view('Local/index')->with(compact('local','filiere'));
    }
    
    public function show($id){
        $local = Reclamation::find($id);
        $user = User::all();
        $local->read_at = date("Y-m-d H:i:s");
        $local->save();
        //dd($local);
        return view('/Local/show')->with(compact('local','user'));
    }
    public function save(Request $request){
        $local = Reclamation::find($request->id);
        //$user = User::all()->where('role_id',2);
        $local->reponse = $request->reponse;
        $local->read_by = Auth::user()->id;
        $local->read=1;
        $local->reponse_by = Auth::user()->id;
        $local->reponse_at = date("Y-m-d H:i:s");
        //dd($local);
        $local->save();
        return redirect('/reclamation');
    }
    public function detail($id){
        $local = Reclamation::find($id);
        $user = User::all();
        $filiere = Filiere::all();
        $local->save();
        //dd($local);
        return view('/Local/detail')->with(compact('local','user','filiere'));        
}

}
