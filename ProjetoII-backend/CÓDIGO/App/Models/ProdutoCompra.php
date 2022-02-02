<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCompra extends Model
{
    use HasFactory;

    protected $table = 'produtocompra';
    protected $fillable = [ 
                            'id',
                            'quantidade',
                            'valorUnitario',
                            'valorTotal', 
                            'idProduto',
                            'idCompra',
                            'created',
                            'edited'
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function compra()
    {
        return $this->belongsTo(Compra::class,'idCompra','id');
    }
}
