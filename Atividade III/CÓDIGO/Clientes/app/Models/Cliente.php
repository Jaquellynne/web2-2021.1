<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class Cliente extends Models {

        use MasFactory;

        //nome da tabela
        protected $table = "clientes";

        //colocar campos que serao setados no bd
        protected $fillable = [
            'nome', 
            'debito', 
            'descricao'
        ];

        
    }
