<?php

namespace App\Http\Controllers\Local;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    //
    public function index(){
        $slide = Slide::all();
        return view('Local/Slide/index')->with(compact('slide'));
    }
    public function create(){
        $slide = Slide::all();
        return view('Local/slide/create');
    }


    public function store(Request $request){
         $slide = new Slide();
         $slide->titre=$request->titre;
         $slide->stitre=$request->stitre;
         //dd($slide);
if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/fichiers')){
                    mkdir(public_path().'/fichiers');
                }
                if(!file_exists(public_path().'/fichiers/Slides')){
                    mkdir(public_path().'/fichiers/Slides');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'fichiers/Slides/'. $name;
                $fichier->move(public_path('fichiers/Slides'),$name);
                $slide->image_uri = $path;
                //dd($slide);

            }
        }
        //dd('ext not ok');

         $slide->save();
         return redirect('/slides');

    }

        public function edit($id){
            $slide = Slide::find($id);
            return view('Local/Slide/edit')->with(compact('slide'));
        }

        public function save(Request $request){
            $slide = Slide::find($request->id);
            $slide->titre=$request->titre;
            $slide->stitre=$request->stitre;
         //dd($slide);
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/fichiers')){
                    mkdir(public_path().'/fichiers');
                }
                if(!file_exists(public_path().'/fichiers/Slides')){
                    mkdir(public_path().'/fichiers/Slides');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'fichiers/Slides/'. $name;
                $fichier->move(public_path('fichiers/Slides'),$name);
                $slide->image_uri = $path;
                //dd($slide);

            }
        }
        //dd('ext not ok');

         $slide->save();
         return redirect('/slides');

    }

    public function open($id){
        $slide = Slide::find($id);
        $slide->actif=1;
        //dd($slide);
        $slide->save();
        return redirect('/slides');
    }
     public function close($id){
        $slide = Slide::find($id);
        $slide->actif=0;
        //dd($slide);
        $slide->save();
        return redirect('/slides');
    }
}

