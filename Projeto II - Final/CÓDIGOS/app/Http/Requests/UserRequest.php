<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => "required|min:3|unique:users,name,{$this->route()->funcionario},id",
            'cpf' => [
                'required', 'max:14', "unique:users,cpf,{$this->route()->funcionario},id",
            ],
            'nivelAcesso' => [
                'required', 'numeric'
            ],
            'email' => [
                'required', 'email', "unique:users,email,{$this->route()->funcionario},id",
            ],
            'password' => [
                $this->route()->funcionario ? 'nullable' : 'required', 'confirmed', 'min:6' , 'different:old_password',
                 
            ],
            'password_confirmation' => [$this->route()->funcionario ? 'nullable' : 'required', 'min:6'],
            'telefone' => 'required', 
            'endereco' => 'required|min:5|max:80', 
            'dataNascimento' =>  'required|date', 
            'foto' => "nullable|mimes:jpg,jpeg,png,bmp,gif,svg,webp|file|max:7000",
            
            
            
        ];

    }

    public function messages()
    {
        return [
            'name.unique' => 'Este nome já está associado a outro funcionário',
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo Nome precisa ter no mínimo 3 caracteres',

            'cpf.unique' => 'Este CPF já está associado a outro funcionário',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.max' => 'O campo CPF pode ser no máximo de 14 caracteres',

            'nivelAcesso.numeric' => 'O campo Nivel de Acesso só aceita numéros',
            'nivelAcesso.required' => 'O campo Nivel de Acesso é obrigatório',

            'email.unique' => 'Este email já está associado a outro funcionário',
            'email.required' => 'O campo Email é obrigatório',
            'email.email' => 'O campo Email só aceita no formato email, exemplo: fulano@provedoremail.com',

            'password.required' => 'O campo Senha é obrigatório',
            'password.confirmed' => 'Os campos Senha e Confirmação de Senha não coincidem',
            'password.min' => 'O campo Senha precisa ter no mínimo 6 caracteres',
            'password.different' => 'O campo Senha precisa ser diferente da anterior',

            'password_confirmation.required' => 'O campo Confirmação de Senha é obrigatório',
            'password_confirmation.min' => 'O campo Confirmação de Senha precisa ter no mínimo 6 caracteres',

            'telefone.required' => 'O campo Telefone é obrigatório',

            'endereco.required' => 'O campo Endereço é obrigatório',
            'endereco.min' => 'O campo Endereço precisa ter no mínimo 6 caracteres',
            'endereco.max' => 'O campo Endereço precisa ter no máximo 80 caracteres',

            'dataNascimento.required' => 'O campo Data Nascimento é obrigatório',
            'dataNascimento.date' => 'O campo Data Nascimento só aceita data',

            'foto.mimes' => 'O campo Foto só aceita arquivos .jpg, .jpeg, .png, .bmp, .gif, .svg, ou .webp',
            'foto.max' => 'O campo Foto só aceita arquivos de no máximo 7MB',
            'foto.file' => 'Arquivo de upload inválido',
        ];
    }
}
