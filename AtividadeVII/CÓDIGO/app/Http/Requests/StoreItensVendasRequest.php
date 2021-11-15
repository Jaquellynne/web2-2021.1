<?php

namespace App\Htpp\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreItensVendasRequest extends FormRequest{

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
            
            'quantidade' => 'required',
            'valor_unitario' => 'required',
        ];
    }
    public function messages(){

        return[
            
            'quantidade.required' => 'Campo quantidade é obrigatório',
            'valor_unitario' => 'Campo valor unitário é obrigatório',
           
        ];
            
        
    }

}