<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('dominio');
            $table->string('senha');
            $table->integer('perfil_usuario');
            $table->string('nome');
            $table->string('email');
            $table->string('foto_perfil');
            $table->string('nome_fantasia');
            $table->string('endereco');
            $table->integer('numero');
            $table->string('complemento');
            $table->integer('cidade');
            $table->string('cep');
            $table->string('cnpj_cpf');
            $table->string('ie');
            $table->string('rg');
            $table->date('data_nascimento');
            $table->string('telefone');
            $table->string('celular');
            $table->longText('observacoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
