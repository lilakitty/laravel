<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginasController extends Controller
{
    public function index(){
        return view('paginas/index');
    }

    public function inicio(){
        return view('paginas/inicio');
    }

    public function administrar_proyecto(){
        return view('paginas/administrar_proyecto');
    }

    public function agregar_proyecto(){
        return view('paginas/agregar_proyecto');
    }
    
    public function editar_proyecto(){
        return view('paginas/editar_proyecto');
    }

    public function miperfil(){
        return view('paginas/miperfil');
    }

    public function miempresa(){
        return view('paginas/miempresa');
    }

    public function propuesta(){
        return view('paginas/propuesta');
    }
}
