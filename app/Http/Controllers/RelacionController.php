<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use App\Models\ficha;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    //
    public function index(){
        $aprendizs=Aprendiz::all();
        return view('welcome',
        compact('aprendizs'));
    }
}
