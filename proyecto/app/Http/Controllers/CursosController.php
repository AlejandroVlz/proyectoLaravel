<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');

    }

    
}
