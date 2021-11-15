<?php

namespace App\Htpp\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreEnderecoRequest extends FormRequest{

    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize(){

        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            
            'logradouro' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required|max:2',
            
        ];
    }
    public function messages(){

        return[
            
            'logradouro.required' => 'O campo nome é obrigatório',
            'bairro.required' => 'O campo bairro é obrigatório',
            'cidade.required' => 'O campo cidade é obrigatório',
            'uf.required' => 'O campo uf é obrigatório',
            'uf.min' => ' Campo uf deve ter no máximo :2 caracteres',
        ];
            
        
    }

}