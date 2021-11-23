<?php

namespace App\Htpp\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreEntradaRequest extends FormRequest{

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
            
            'data_entrada' => 'required',
            'data_saida' => 'required',
            
        ];
    }
    public function messages(){

        return[
            
            'data_entrada.required' => 'Campo data da entrada é obrigatória',
            'data_saida' => 'Campo data da saida é obrigatória',
           
        ];
            
        
    }

}