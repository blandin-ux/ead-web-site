<?php

namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reclamation;
use App\User;
use App\Models\Filiere;
use App\models\Type;
use Illuminate\Support\Facades\Auth;

class ReclamationController extends Controller
{
    //
    public function index(){
        $etudiant = Reclamation::OrderBy('id')->paginate(5);
        $user = User::all();
        return view('Etudiant/index')->with(compact('etudiant','user'));
        
    }

    public function create(){
        $etudiant = Reclamation::all();
        $user = User::all();
        $filiere = Filiere::all();
        $type = Type::all();
        return view('Etudiant/create')->with(compact('etudiant','filiere','type','user'));
    }

    public function store(Request $request){
        $etudiant = new Reclamation();
        $etudiant->name = $request->name;
        $etudiant->body = $request->body;
        $etudiant->user_id = Auth::user()->id;
        $etudiant->filiere_id = $request->filiere_id;
        $etudiant->type_id = $request->type_id;
        $etudiant->reponse = 'Aucune';
        //dd($etudiant);
        $etudiant->save();
        return redirect('/reclamations');
    }

    public function show($id){
        $etudiant = Reclamation::find($id);
        $user = User::all()->where('role_id',2);
        $type = Type::all();
        return view('Etudiant\show')->with(compact('etudiant','user','type'));
    }

    public function close($id){
        $etudiant = Reclamation::find($id);
        $etudiant->actif=0;
        $etudiant->save();
        //dd($etudiant);
        return redirect('/reclamations');
        
    }

    public function open($id){
        $etudiant = Reclamation::find($id);
        $etudiant->actif=1;
        $etudiant->save();
        //dd($etudiant);
        return redirect('/reclamations');
        
    }   
 
}
