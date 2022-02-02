<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venda;

class ProdutoVenda extends Model
{
    use HasFactory;

    protected $table = 'produtovenda';
    protected $fillable = [ 
                            'id',
                            'quantidade',
                            'valorUnitario',
                            'valorTotal', 
                            'idProduto',
                            'idVenda',
                            'created',
                            'edited'
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function venda()
    {
        return $this->belongsTo(Venda::class,'idVenda','id');
    }
}
