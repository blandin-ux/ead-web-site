<?php

namespace App\Http\Controllers\Local\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    //
    public function index(){
        $slide = Slide::all();
        return view('Local/Frontoffice/Slide/index')->with(compact('slide'));
    }
}
