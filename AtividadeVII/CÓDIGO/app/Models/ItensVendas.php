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
            'valor_unitario',
            'vendas_id',
            'produto_id'
            
        
        ];
        function Vendas(){
            return $this->belongsTo(Vendas::class, 'vendas_id', 'id');
        }
        function Produto(){
            return $this->belongsTo(Produto::class, 'produto_id', 'id');
        }
    }
