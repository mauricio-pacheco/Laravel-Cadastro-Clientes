<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class GerenciarUsuarioController extends Controller
{
    public function gerenciar() {

        $usuarios = Usuarios::all();
        return view('gerenciar', [
            'usuarios' => $usuarios
        ]);
    
       }
}
