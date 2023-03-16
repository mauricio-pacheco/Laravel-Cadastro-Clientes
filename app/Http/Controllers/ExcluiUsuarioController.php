<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class ExcluiUsuarioController extends Controller
{
    public function index($id) {

        //SELECIONAR O ID PARA A EXCLUSÃO
        $usuarios = Usuarios::find($id);
        $usuarios->delete();    
        
        //REDIRECIONAR PÁGINA
        $usuarios = Usuarios::all();
        return view('index', [
            'usuarios' => $usuarios
        ]);
     
       }
}
