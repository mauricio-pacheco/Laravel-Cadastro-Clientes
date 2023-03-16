<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    //FILABLE
    protected $fillable = ['usuario',
        'dominio', 
        'senha', 
        'perfil_usuario', 
        'nome', 
        'email', 
        'foto_perfil', 
        'razao_social',
        'nome_fantasia', 
        'endereco', 
        'numero', 
        'complemento', 
        'cidade', 
        'cep', 
        'cpf', 
        'ie', 
        'rg',
        'data_nascimento',
        'telefone',
        'celular',
        'observacoes'
    ];

}
