<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    //MÉTODO ACTIONS
    public function principal(){

        return view('site.principal');
        //echo 'controller principal';
    }
}
