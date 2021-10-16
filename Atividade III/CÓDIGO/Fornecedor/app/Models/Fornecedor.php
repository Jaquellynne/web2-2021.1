<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class Fornecedor extends Models {

        use MasFactory;

        //nome da tabela
        protected $table = "fornecedor";

        //colocar campos que serao setados no bd
        protected $fillable = [
            'nome',
            'CNPJ',
            'email'

            ];
    }
