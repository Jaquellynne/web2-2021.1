<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class Entrada extends Models {

        use MasFactory;

        //nome da tabela
        protected $table = "entrada";

        //colocar campos que serao setados no bd
        protected $fillable = [
            'data_entrada',
            'data_saida'

        ];
        function ItensEntrada(){
            return $this->hasMany(ItensEntrada::class, 'entrada_id', 'id');
        }
    }
