<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::factory()->create([
            'cpf' => '16798125050',
            'nome' => 'Luke Skywalker',
        ]);

        Usuario::factory()->create([
            'cpf' => '59875804045',
            'nome' => 'Bruce Wayne',
        ]);

        Usuario::factory()->create([
            'cpf' => '04707649025',
            'nome' => 'Diane Prince',
        ]);

        Usuario::factory()->create([
            'cpf' => '21142450040',
            'nome' => 'Bruce Banner',
        ]);

        Usuario::factory()->create([
            'cpf' => '83257946074',
            'nome' => 'Harley Quinn',
        ]);

        Usuario::factory()->create([
            'cpf' => '07583509025',
            'nome' => 'Peter Parker',
        ]);
    }
}
