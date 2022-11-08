<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'info';

    protected $fillable = [
        'cpf',
        'genero',
        'ano_nascimento',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cpf', 'cpf');
    }

    public function getMaiorIdadeAttribute()
    {
      $ano_nascimento = $this->ano_nascimento;
      $ano_atual = date('Y');

      if($ano_atual - $ano_nascimento > 50){
        return 'SIM';
      }

      return 'NÃO';
    }
}
