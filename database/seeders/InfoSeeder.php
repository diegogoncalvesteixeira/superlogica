<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Info;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Info::factory()->create([
            'cpf' => '16798125050',
            'genero' => 'M',
            'ano_nascimento' => '1976',
        ]);

        Info::factory()->create([
            'cpf' => '59875804045',
            'genero' => 'M',
            'ano_nascimento' => '1960',
        ]);

        Info::factory()->create([
            'cpf' => '04707649025',
            'genero' => 'F',
            'ano_nascimento' => '1988',
        ]);

        Info::factory()->create([
            'cpf' => '21142450040',
            'genero' => 'M',
            'ano_nascimento' => '1954',
        ]);

        Info::factory()->create([
            'cpf' => '83257946074',
            'genero' => 'F',
            'ano_nascimento' => '1970',
        ]);

        Info::factory()->create([
            'cpf' => '07583509025',
            'genero' => 'M',
            'ano_nascimento' => '1972',
        ]);
    }
}
