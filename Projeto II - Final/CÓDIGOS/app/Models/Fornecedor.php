<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedor';
    protected $fillable = [ 
                            'id',
                            'nome',
                            'cnpj', 
                            'endereco', 
                            'telefone', 
                            'email'
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
