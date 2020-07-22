<?php

namespace App\Http\Controllers\Local;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Emptemp;
use App\Models\Semestre;
use App\Models\Filiere;
use App\Models\Site;
use App\Models\Annee;
class EmploieController extends Controller
{
    //
    public function index(){
        $emploie = Emptemp::all();
        $semestre = Semestre::all();
        $filiere = Filiere::all();
        $site = Site::all();
        $annee = Annee::all();         
        return view('Local/Emploie/index')->with(compact('emploie','semestre','filiere','site','annee'));
    }
    public function create(){
        $emploie = Emptemp::all();
        $semestre = Semestre::all();
        $filiere = Filiere::all();
        $site = Site::all();
        $annee = Annee::all();
        return view('Local/Emploie/create')->with(compact('emploie','semestre','filiere','site','annee'));
    }
    public function store(Request $request){
         $emploie = new Emptemp();
         $emploie->titre=$request->titre;
         $emploie->filiere_id=$request->filiere_id;
         $emploie->site_id=$request->site_id;
         $emploie->annee_id= $request->annee_id;
         $emploie->semestre_id= $request->semestre_id;
         //dd($emploie);

if($request->path){
            $fichier = $request->path;
            $ext_array= ['pdf'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/fichiers')){
                    mkdir(public_path().'/fichiers');
                }
                if(!file_exists(public_path().'/fichiers/Emploies')){
                    mkdir(public_path().'/fichiers/Emploies');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'fichiers/Emploies/'. $name;
                $fichier->move(public_path('fichiers/Emploies'),$name);
                $emploie->path = $path;
                //dd($emploie);

            }
        }
        //dd('ext not ok');

         $emploie->save();
         return redirect('/emploies');
    }

    public function show($id){
        $emploie = Emptemp::find($id);
        $semestre = Semestre::all();
        $filiere = Filiere::all();
        $site = Site::all();
        $annee = Annee::all();
        return view('/Local/Emploie/show')->with(compact('emploie','semestre','filiere','site','annee'));;
    }
    
    public function edit($id){
        $emploie = Emptemp::find($id);
        $semestre = Semestre::all();
        $filiere = Filiere::all();
        $site = Site::all();
        $annee = Annee::all();
        return view('/Local/Emploie/edit')->with(compact('emploie','semestre','filiere','site','annee'));;   
    }

    public function save(Request $request){
         $emploie = Emptemp::find($request->id);
         $emploie->titre=$request->titre;
         $emploie->filiere_id=$request->filiere_id;
         $emploie->site_id=$request->site_id;
         $emploie->annee_id= $request->annee_id;
         $emploie->semestre_id= $request->semestre_id;
         //dd($emploie);

if($request->path){
            $fichier = $request->path;
            $ext_array= ['pdf'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/fichiers')){
                    mkdir(public_path().'/fichiers');
                }
                if(!file_exists(public_path().'/fichiers/Emploies')){
                    mkdir(public_path().'/fichiers/Emploies');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'fichiers/Emploies/'. $name;
                $fichier->move(public_path('fichiers/Emploies'),$name);
                $emploie->path = $path;
                //dd($emploie);

            }
        }
        //dd('ext not ok');

         $emploie->save();
         return redirect('/emploies');
    }

    public function open($id){
        $emploie = Emptemp::find($id);
        $emploie->actif=1;
        //dd($emploie); 
        $emploie->save();
        return redirect('/emploies');
    }
        public function close($id){
        $emploie = Emptemp::find($id);
        $emploie->actif=0;
        //dd($emploie);
        $emploie->save();
        return redirect('/emploies');
    }
}
