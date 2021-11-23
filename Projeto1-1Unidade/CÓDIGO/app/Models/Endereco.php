<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class Endereco extends Models {

        use MasFactory;

        //nome da tabela
        protected $table = "enderecos";

       
        //colocar campos que serao setados no bd
        protected $fillable = [
            'logradouro', 
            'bairro', 
            'cidade',
            'uf',
            'cliente_id'
        ];

        function cliente(){
            return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
        }

        
    }
