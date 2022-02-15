<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\ProdutoVenda;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'venda';
    protected $fillable = [ 
                            'id',
                            'quantidade',
                            'valorTotal', 
                            'notaFiscal', 
                            'idCliente',
                            'idFuncionario',
                            'idFormaPagamento',
                            'created',
                            'updated'
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'idCliente','id');
    }

    public function formaPagamento()
    {
        return $this->belongsTo(FormaPagamento::class,'idFormaPagamento','id');
    }

    public function produtosVenda()
    {
        return $this->hasMany(ProdutoVenda::class,'idVenda','id');
    }
}
