<?php
namespace App\Htpp\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreClienteRequest extends FormRequest{
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
            
                'nome' => 'required|min:10',
                'debito' => 'required',  
        ];
    }
    public function messages(){
        return[
            'nome.required' => 'Campo nome é obrigatório',
            'nome.min' => 'Campo nome deve ter no mínimo :10 caracteres',
            'debito.required' => 'O campo débito é obrigatório',
        ]; 
    }
}