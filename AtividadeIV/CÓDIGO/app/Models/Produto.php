<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class Produto extends Models {

        use MasFactory;

        //nome da tabela
        protected $table = "produto";

        //colocar campos que serao setados no bd
        protected $fillable = [
            'nome',
            'tipo'

            ];
    }
