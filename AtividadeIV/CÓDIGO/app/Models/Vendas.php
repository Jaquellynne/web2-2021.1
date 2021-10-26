<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class Vendas extends Models {

        use MasFactory;

        //nome da tabela
        protected $table = "vendas";

        //colocar campos que serao setados no bd
        protected $fillable = [
            'valor_total',
            'valor_troco ',
            'desconto '

            ];
        function ItensVendas(){
            return $this->hasMany(ItensVendas::class, 'vendas_id', 'id');
        }
    }
