<?php

namespace App\Htpp\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreItensEntradaRequest extends FormRequest{

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
            
            'nome_itens_entrada' => 'required',
            'descricao' => 'required', 
        ];
    }
    public function messages(){

        return[
            
            'nome_itens_entrada.required' => 'Campo nome itens entrada é obrigatório',
            'descricao.required' => 'Campo descrição é obrigatório',
            
        ];
            
        
    }

}