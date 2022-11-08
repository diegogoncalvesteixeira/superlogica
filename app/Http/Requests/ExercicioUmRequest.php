<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FullnameRule;

class ExercicioUmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', new FullnameRule],
            'userName' => 'required|unique:users,username',
            'zipCode' => 'required|formato_cep',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/|min:8',
        ];
    }
}
