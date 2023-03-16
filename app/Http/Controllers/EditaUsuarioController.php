<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class EditaUsuarioController extends Controller
{
    
    public function index(Usuarios $id) {

        $usuarios = Usuarios::all();
        return view('usuario', [
            'usuarios' => $usuarios,
            'id' => $id
        ]);
    
       }
}
