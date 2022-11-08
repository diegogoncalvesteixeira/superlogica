<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Http\Traits\HelperTrait;

class FullnameRule implements Rule
{
    use HelperTrait;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
      //verifica se o value tem duas palavras ou mais
      $palavras = explode(' ', $value);
      if(count($palavras) < 2){
        return false;
      }

      $palavras = explode(' ', $value);
      foreach($palavras as $palavra){
        $palavra = $this->formataCaracteresEspeciais($palavra);
        if(!ctype_alpha($palavra)){
          return false;
        }
      }

      return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Você precisa inserir seu nome completo.';
    }
}
