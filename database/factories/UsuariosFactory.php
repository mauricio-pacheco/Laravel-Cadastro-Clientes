<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            //CRIAR DADOS DE EXEMPLO NO BANCO
            /*
            'usuario' => $this->faker->word,
            'dominio' => $this->faker->word,
            'senha' => $this->faker->word,
            'perfil_usuario' => $this->faker->randomDigit(),
            'nome' => $this->faker->word,
            'email' => $this->faker->word,
            'foto_perfil' => $this->faker->imageUrl(),
            'nome_fantasia' => $this->faker->word,
            'endereco' => $this->faker->word,
            'numero' => $this->faker->word,
            'complemento' => $this->faker->word,
            'cidade' => $this->faker->randomDigitNot(),
            'cep' => $this->faker->word,
            'cnpj_cpf' => $this->faker->word,
            'ie' => $this->faker->word,
            'rg' => $this->faker->word,
            'data_nascimento' => $this->faker->date(),
            'telefone' => $this->faker->word,
            'celular' => $this->faker->word,
            'observacoes' => $this->faker->sentence(),
            */

        ];
    }
}
