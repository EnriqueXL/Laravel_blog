<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return view('cursos/index');
    }

    public function create(){
        return view('cursos/create');
    }

    public function show($curso){

        // compact devuelve un array ['curso' => $curso];
        return view('cursos/show', compact('curso'));
        
        // Ambas lineas hacen lo mismo, pero de esta forma puedo renombrar la variable para la vista en caso de ser necesario
        // return view('cursos/show', ['nombreDelCurso' => $curso]);
    }


}
