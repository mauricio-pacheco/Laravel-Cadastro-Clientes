<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class CadastraUsuarioController extends Controller
{

    public function cadastrar(Request $request) 
    {
    
        //INVERTER A DATA
        function inverteData($data) {
            if(count(explode("/",$data)) > 1) {
            return implode("-",array_reverse(explode("/",$data)));
            } elseif(count(explode("-",$data)) > 1) {
            return implode("/",array_reverse(explode("-",$data)));
            }
        }

        //COLETAR DADOS DO FORMULÁRIO
        $input = $request->validate([
            'usuario' => 'string|nullable', 
            'dominio' => 'string|nullable', 
            'senha' => 'string|nullable', 
            'perfil_usuario' => 'integer|nullable', 
            'nome' => 'string|nullable', 
            'email' => 'string|nullable', 
            'foto_perfil' => 'string|nullable', 
            'razao_social' => 'string|nullable',
            'nome_fantasia' => 'string|nullable', 
            'endereco' => 'string|nullable', 
            'numero' => 'string|nullable', 
            'complemento' => 'string|nullable', 
            'cidade' => 'integer|nullable', 
            'cep' => 'string|nullable', 
            'cpf' => 'integer|nullable', 
            'ie' => 'integer|nullable', 
            'rg' => 'string|nullable',
            'data_nascimento' => 'string|nullable',
            'telefone' => 'string|nullable',
            'celular' => 'string|nullable',
            'observacoes' => 'string|nullable'
        ]);

        $input['data_nascimento'] = inverteData($request->input('data_nascimento'));

        //IMPRIME O ARRAY
        //dd($input);

        //SALVAR O SLUG
        //$input['slug'] = Str::slug($input['usuario']);

        //SALVAR NO BANCO DE DADOS
        Usuarios::create($request->all($input));

        //REDIRECIONAR PÁGINA
        $usuarios = Usuarios::all();
        return view('index', [
            'usuarios' => $usuarios
        ]);
      
    }

}
