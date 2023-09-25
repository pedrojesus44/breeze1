<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    //MÉTODO ACTIONS
    public function principal(){

        return view('site.contato');
        //echo 'controller contato';
    }

    public function contato() {
        var_dump($_POST);
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
