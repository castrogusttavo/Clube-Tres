<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clubeController extends Controller
{
    public function clube(){
        return view('clube-tres');
    }

    public function regulamento(){
        return view('regulamento_clube');
    }

    public function beneficios(){
        return view('beneficios_clube');
    }

    public function sobre(){
        return view('sobre-nos');
    }

    public function filiais(){
        return view('filiais_clube');
    }
}
