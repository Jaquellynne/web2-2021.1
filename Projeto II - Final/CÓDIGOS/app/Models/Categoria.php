<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $fillable = [ 
                            'id',
                            'nome',
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function produtos()
    {
        return $this->hasMany(Produto::class,'idCategoria','id');
    }
}
