<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compra';
    protected $fillable = [ 
                            'id',
                            'quantidade',
                            'valorTotal', 
                            'notaFiscal', 
                            'idFornecedor',
                            'idFuncionario',
                            'idFormaPagamento',
                            'created',
                            'updated'
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class,'idFornecedor','id');
    }

    public function formaPagamento()
    {
        return $this->belongsTo(FormaPagamento::class,'idFormaPagamento','id');
    }

    public function produtosCompra()
    {
        return $this->hasMany(ProdutoCompra::class,'idCompra','id');
    }
}
