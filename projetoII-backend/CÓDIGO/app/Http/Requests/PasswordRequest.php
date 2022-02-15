<?php

namespace App\Http\Requests;

use App\Rules\CurrentPasswordCheckRule;
use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => ['required', 'min:6', new CurrentPasswordCheckRule],
            'password' => ['required', 'min:6', 'confirmed', 'different:old_password'],
            'password_confirmation' => ['required', 'min:6'],
        ];
    }

    public function messages()
    {
        return [
            'old_passwword.required' => "O campo Senha Atual é obrigatório",
            'old_passwword.min' => "A senha Atual deve ser formada por no mínimo 6 caracteres",
            'passwword.required' => "O campo Nova Senha é obrigatório",
            'passwword.min' => "A senha deve ter no mínimo 6 caracteres",
            'passwword.confirmed' => "O valor de Nova Senha não coincide com Confirmar Senha",
            'passwword.different' => "O valor de Nova Senha deve ser diferente da Senha Atual",
            'password_confirmation.required' => "O campo Confirmar Nova Senha é obrigatório",
            'password_confirmation.min' => "A senha deve ter no mínimo 6 caracteres",
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'old_password' => __('current password'),
        ];
    }

}
