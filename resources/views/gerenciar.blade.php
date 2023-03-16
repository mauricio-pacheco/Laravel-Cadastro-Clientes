@extends('layouts.default')

@section('titulo_pagina')
Projeto Laravel - Maurício Pacheco
@endsection

@section('descricao_pagina')
Projeto Laravel - Maurício Pacheco
@endsection

@section('rodape_pagina')
Projeto Laravel - Maurício Pacheco
@endsection

@section('listar_usuarios')

<h3>Gerenciar Usuários</h3>
<hr>
<div style="height: 4px"></div>

   <!-- LISTAR OS USUÁRIOS -->

    <table class="table table-bordered datatable" id="table-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr class="odd gradeX">
                <td>{{ $usuario -> id }}</td>
                <td>{{ $usuario -> nome }}</td>
                <td>{{ $usuario -> email }}</td>
                <td><a href="{{ route('usuario', $usuario->id) }}">EDITAR</a></td>
                <td><a href="{{ route('excluir', $usuario->id) }}">EXCLUIR</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection



