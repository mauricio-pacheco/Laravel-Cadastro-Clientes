<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
   public function index() {

    $cidades = Cidades::all();
    $usuarios = Usuarios::all();
    return view('index', [
        'usuarios' => $usuarios,
        'cidades' => $cidades
    ]);

   }
  
}
