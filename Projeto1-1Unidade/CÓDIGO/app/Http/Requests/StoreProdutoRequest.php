<?php

namespace App\Htpp\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreProdutoRequest extends FormRequest{

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
            
            'nome' => 'required',
            'tipo' => 'required',
        ];
    }
    public function messages(){

        return[
            
            'nome.required' => 'Campo nome é obrigatório',
            'tipo.required' => 'Campo tipo deve ser obrigatório',
           
        ];
            
        
    }

}