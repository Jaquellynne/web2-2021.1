<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';
    protected $fillable = [ 
                            'id',
                            'nome',
                            'marca', 
                            'cor', 
                            'ano', 
                            'quantidade', 
                            'foto', 
                            'valorCompra', 
                            'valorVenda',
                            'idCategoria'
                        ];

    protected $guarded =['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'idCategoria','id');
    }


}
