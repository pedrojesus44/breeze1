<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    //
    //MÉTODO ACTIONS
    public function principal(){

        return view('site.sobrenos');
        //echo 'controller sobre nós';
    }
}
