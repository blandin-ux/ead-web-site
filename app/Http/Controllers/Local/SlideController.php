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
        return view('Local/Slide/index')->with(compact('slide'));;
    }
    public function create(){
        $slide = Slide::all();
        return view('Local/slide/create');
    }


    public function store(Request $request){
         $slide = new Slide();
         $slide->titre=$request->titre;
         $slide->stitre=$request->stitre;
         $slide->actif=$request->actif;
         $slide->image_uri=$request->image_uri;
         dd($slide);

if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_image_uri().'/fichiers')){
                    mkdir(public_image_uri().'/fichiers');
                }
                if(!file_exists(public_image_uri().'/fichiers/Slides')){
                    mkdir(public_image_uri().'/fichiers/Slides');
                }

                $name = date('dmYhis').'.'.$ext;
                $image_uri = 'fichiers/Slides/'. $name;
                $fichier->move(public_image_uri('fichiers/Slides'),$name);
                $slide->image_uri = $image_uri;
                //dd($slide);

            }
        }
        //dd('ext not ok');

         $slide->save();
         return redirect('/slides');
    }

    public function show($id){
        $slide = Slide::find($id);
        return view('/Local/Slide/show')->with(compact('slide'));;
    }
    
  
}

