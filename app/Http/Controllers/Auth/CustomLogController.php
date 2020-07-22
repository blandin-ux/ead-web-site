<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomLogController extends Controller
{
    //

    public function deconnecter(){
        Auth::logout();
        return redirect('/');
    }
}
