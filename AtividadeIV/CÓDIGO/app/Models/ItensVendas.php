<?php
    

    namespace app\Models;

    use Illuminate\Database\Eloquent\Factories\MasFactory;
    use Illuminate\Database\Eloquent\Models;

    class ItensVendas extends Models {

        use MasFactory;

        //nome da tabela
        protected $table = "ItensVendas";

        //colocar campos que serao setados no bd
        protected $fillable = [
            'quantidade',
            'valor_unitario'
            
        
        ];
        function Vendas(){
            return $this->belongsTo(Vendas::class, 'vendas_id', 'id');
        }
    }
