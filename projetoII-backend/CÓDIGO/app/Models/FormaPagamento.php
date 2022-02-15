<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    use HasFactory;

    protected $table = 'formapagamento';
    protected $fillable = [ 
                            'id',
                            'descricao'
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function vendas()
    {
        return $this->hasMany(Venda::class,'idFormaPagamento','id');
    }
}
