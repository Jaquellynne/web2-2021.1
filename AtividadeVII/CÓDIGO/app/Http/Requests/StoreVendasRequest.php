<?php

namespace App\Htpp\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreVendasRequest extends FormRequest{

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
            
            'valor_total' => 'required',
            'valor_troco' => 'required',
            'desconto' => 'required',
        ];
    }
    public function messages(){

        return[
            
            'valor_total.required' => 'Campo valor total é obrigatório',
            'valor_troco.required' => 'Campo valor troco é obrigatório',
            'desconto.required' => 'O campo desconto é obrigatório',
        ];
            
        
    }

}