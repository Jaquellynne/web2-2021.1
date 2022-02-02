<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $fillable = [ 
                            'id',
                            'nome',
                            'cpf', 
                            'endereco', 
                            'telefone', 
                            'dataNascimento'
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function vendas()
    {
        return $this->hasMany(Venda::class,'idCliente','id');
    }
}
