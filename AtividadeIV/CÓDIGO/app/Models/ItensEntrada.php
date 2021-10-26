<?php
    
    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class ItensEntrada extends Models {

        use MasFactory;

        //nome da tabela
        protected $table = "itensEntrada";

        //colocar campos que serao setados no bd
        protected $fillable = [
            'nome_itens_entrada',
            'descricao'

        ];
        function Entrada(){
            return $this->belongsTo(Entrada::class, 'entrada_id', 'id');
        }
    }
