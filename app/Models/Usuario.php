<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected $fillable = [
        'cpf',
        'nome',
    ];

    public function info()
    {
        return $this->hasOne(Info::class, 'cpf', 'cpf');
    }

    public function getMaiorIdadeAttribute()
    {
      $ano_nascimento = $this->info->ano_nascimento;
      $ano_atual = date('Y');

      if($ano_atual - $ano_nascimento > 50){
        return 'SIM';
      }

      return 'NÃO';
    }
}
